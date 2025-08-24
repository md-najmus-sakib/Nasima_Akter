<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $portfolio = Portfolio::first();
        $skills = Skill::all();
        $projects = Project::all();
        
        return view('admin.dashboard', compact('portfolio', 'skills', 'projects'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'bio' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv_link' => 'nullable|url',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $portfolio = Portfolio::first();
        if (!$portfolio) {
            $portfolio = new Portfolio();
        }

        $portfolio->name = $request->name;
        $portfolio->title = $request->title;
        $portfolio->bio = $request->bio;
        $portfolio->email = $request->email;
        $portfolio->phone = $request->phone;
        $portfolio->location = $request->location;
        $portfolio->cv_link = $request->cv_link;

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($portfolio->profile_image && Storage::exists('public/' . $portfolio->profile_image)) {
                Storage::delete('public/' . $portfolio->profile_image);
            }
            
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->extension();
            $image->storeAs('public/images', $imageName);
            $portfolio->profile_image = 'images/' . $imageName;
        }

        // Handle social links
        $portfolio->social_links = [
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'twitter' => $request->twitter,
        ];

        $portfolio->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function updateSkill(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
            'category' => 'nullable|string|max:255',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->only(['name', 'proficiency', 'category']));

        return redirect()->back()->with('success', 'Skill updated successfully!');
    }

    public function deleteSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }

    public function addSkill(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'required|integer|min:0|max:100',
            'category' => 'nullable|string|max:255',
        ]);

        Skill::create($request->only(['name', 'proficiency', 'category']));

        return redirect()->back()->with('success', 'Skill added successfully!');
    }
}
