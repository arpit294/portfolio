<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        // Save into MySQL database
        $contact = ContactMessage::create($validated);

        // Optional: Mail Support (Logs if SMTP not configured)
        try {
            Log::info('New Contact Inquiry Received:', $validated);
            // If Mail setup exists in future, send notification
        } catch (\Exception $e) {
            Log::error('Mail sending error: ' . $e->getMessage());
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Thank you, ' . $validated['name'] . '! Your inquiry has been sent successfully. I will get back to you shortly.'
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your inquiry has been submitted successfully.');
    }
}
