<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    protected $profileService;

    public function __construct(ProfileService $profileService) {
        $this->profileService = $profileService;
    }

    public function show($id) {
        $profile = Profile::with('skills', 'portfolio')->findOrFail($id);
        return response()->json($profile);
    }

    public function update(Request $request, $id) {
        $profile = Profile::findOrFail($id);
        $updated = $this->profileService->updateProfile($profile, $request->all());
        return response()->json($updated);
    }

    public function updateSkills(Request $request, $id) {
        $profile = Profile::findOrFail($id);
        $this->profileService->syncSkills($profile, $request->skills);
        return response()->json(['message' => 'Habilidades atualizadas!']);
    }
}
