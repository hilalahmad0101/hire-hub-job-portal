<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Services\AuthService;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function __construct(
        public readonly AuthService $authService,
    ) {}

    /**
     * Store a new company profile
     */
    public function store(Request $request, string $uuid)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'website_url' => 'nullable|url|max:255',
            'industry' => 'nullable|string|max:255',
            'company_size' => 'nullable|string|max:255',
            'company_bio' => 'nullable|string|max:1000',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 2MB
        ]);

        $user = $this->authService->getUserByUuid($uuid);

        $validated['user_id'] = $user->id;
        $validated['uuid'] = str()->uuid();
        $validated['slug'] = str()->slug($validated['company_name']);

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')
                ->store('company/banners', 'public');
        }

        // Handle logo image upload
        if ($request->hasFile('logo_image')) {
            $validated['logo_image'] = $request->file('logo_image')
                ->store('company/logos', 'public');
        }

        $profile = CompanyProfile::create($validated);
        $user->is_task_complete = true;
        $user->save();

        return to_route('web.employer.dashboard')->with('success', 'Company profile created successfully!');
    }

    /**
     * Update the company profile
     */
    // public function update(Request $request, $uuid)
    // {
    //     $profile = CompanyProfile::where('uuid', $uuid)
    //         ->where('user_id', auth()->id())
    //         ->firstOrFail();

    //     $validated = $request->validate([
    //         'company_name' => 'required|string|max:255',
    //         'website_url' => 'nullable|url|max:255',
    //         'industry' => 'nullable|string|max:255',
    //         'company_size' => 'nullable|string|max:255',
    //         'company_bio' => 'nullable|string|max:1000',
    //         'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    //         'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'is_published' => 'nullable|boolean',
    //     ]);

    //     // Handle banner image upload
    //     if ($request->hasFile('banner_image')) {
    //         // Delete old banner
    //         if ($profile->banner_image) {
    //             Storage::disk('public')->delete($profile->banner_image);
    //         }

    //         $validated['banner_image'] = $request->file('banner_image')
    //             ->store('company/banners', 'public');
    //     }

    //     // Handle logo image upload
    //     if ($request->hasFile('logo_image')) {
    //         // Delete old logo
    //         if ($profile->logo_image) {
    //             Storage::disk('public')->delete($profile->logo_image);
    //         }

    //         $validated['logo_image'] = $request->file('logo_image')
    //             ->store('company/logos', 'public');
    //     }

    //     // Update slug if company name changed
    //     if ($validated['company_name'] !== $profile->company_name) {
    //         $validated['slug'] = Str::slug($validated['company_name']);
    //     }

    //     $profile->update($validated);

    //     return back()->with('success', 'Company profile updated successfully!');
    // }
}
