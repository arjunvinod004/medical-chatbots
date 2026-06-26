<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalCondition;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }


public function analyze(Request $request)
{
    $symptoms = array_map(
        'trim',
        explode(',', strtolower($request->symptoms))
    );

    $duration = (int) preg_replace('/[^0-9]/', '', $request->duration);

    $records = MedicalCondition::whereIn('symptoms', $symptoms)
        ->where('min_days', '<=', $duration)
        ->where('max_days', '>=', $duration)
        ->get();

    if ($records->isEmpty()) {
        return response()->json([
            'message' => 'No matching condition found.'
        ]);
    }

    $possibleConditions = [];
    $warningSigns = [];
    $severityAssessments = [];

    foreach ($records as $record) {

        $possibleConditions = array_merge(
            $possibleConditions,
            explode(',', $record->possible_conditions)
        );

        $warningSigns = array_merge(
            $warningSigns,
            explode(',', $record->emergency_warning_signs)
        );

        $severityAssessments[] = $record->severity_assessment;
    }

    return response()->json([
        'possible_conditions' => array_values(
            array_unique(array_map('trim', $possibleConditions))
        ),

        'severity_assessment' => implode(' | ', array_unique($severityAssessments)),

        'emergency_warning_signs' => array_values(
            array_unique(array_map('trim', $warningSigns))
        ),

        'disclaimer' =>
            'This information is provided for educational purposes only and is not a medical diagnosis. Please consult a qualified healthcare professional for proper evaluation.'
    ]);
}

}