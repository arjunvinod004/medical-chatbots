<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicalCondition;

class MedicalConditionSeeder extends Seeder
{
    public function run(): void
    {
        MedicalCondition::insert([

            [
                'symptoms' => 'fever',
                'possible_conditions' => 'Common Cold,Influenza,COVID-19',
                'severity_assessment' => 'Mild to Moderate',
                'emergency_warning_signs' => 'Difficulty breathing,Chest pain,Severe dehydration',
                'created_at' => now(),
                'updated_at' => now(),
                 
                   'min_days' => 2,
                   'max_days' => 5,
            ],

            [
                'symptoms' => 'cough',
                'possible_conditions' => 'Common Cold,Acute Bronchitis,Asthma,GERD,Pneumonia',
                'severity_assessment' => 'Occasional cough, no interference with daily activities, no fever, able to sleep well.',
                'emergency_warning_signs' => 'Difficulty breathing or severe shortness of breath,Chest pain that is severe or stabbing,Confusion, lethargy, or loss of consciousness',
                'created_at' => now(),
                'updated_at' => now(),
             
                   'min_days' => 2,
                   'max_days' => 5,
            ],

            [
                'symptoms' => 'Headache',
                'possible_conditions' => 'Tension Headache,Migraine,Sinus Headache',
                'severity_assessment' => 'Occasional or infrequent dull ache, easily managed with over-the-counter pain relief and rest, does not interfere with daily activities,Persistent pain that noticeably affects concentration and daily tasks, may cause mild nausea or sensitivity to light, b',
                'emergency_warning_signs' => 'Numbness, weakness, paralysis on one side of your face or body,Sudden changes in vision, double vision, or loss of balance,Seizures or loss of consciousness',
                'created_at' => now(),
                'updated_at' => now(),
                   'min_days' => 2,
                  'max_days' => 5,
            ],

            [
                'symptoms' => 'Chest Pain',
                'possible_conditions' => 'Musculoskeletal Pain,GERD/Acid Reflux,Costochondritis,Panic Attack,Stomach acid flowing back into the esophagus, causing a burning sensation behind the breastbone.,Inflammation of the cartilage that connects a rib to the breastbone.',
                'severity_assessment' => 'Brief, localized soreness or burning sensation that does not change with exertion and resolves quickly, Persistent discomfort or aching that causes anxiety or mild limitation in activity; may be related to posture or digestion.,Crushing pressure, intense ',
                'emergency_warning_signs' => 'Sudden, severe pressure, squeezing, or crushing pain in the center of the chest, paralysis on one side of your face or body,Pain radiating to the jaw, neck, back, or one/both arms,Profuse cold sweats',
                'created_at' => now(),
                'updated_at' => now(),
               
                   'min_days' => 2,
                  'max_days' => 5,  
            ],

             [
                'symptoms' => 'Stomach Pain',
                'possible_conditions' => 'Indigestion (Dyspepsia),Gas and Bloating,Gastritis',
                'severity_assessment' => 'Discomfort or burning in the upper abdomen, often related to eating too quickly or consuming certain foods, Accumulation of gas in the digestive tract,Inflammation, irritation, or erosion of the stomach lining. ',
                'emergency_warning_signs' => 'Sudden, severe, or ripping abdominal pain, paralysis on one side of your face or body,Pain localized to the lower right side (possible appendicitis), Abdomen that is rigid, hard, or tender to the touch',
                'created_at' => now(),
                'updated_at' => now(),
                 
                   'min_days' => 2,
                    'max_days' => 5,
            ],
             [
                'symptoms' => 'Fatigue',
                'possible_conditions' => 'Sleep Deprivation,Anemia,Hypothyroidism,Chronic Fatigue Syndrome (CFS/ME),Diabetes',
                'severity_assessment' => 'Feeling tired after long days or intense activity; energy typically improves with rest, better sleep, or minor lifestyle adjustments,Debilitating exhaustion that makes it difficult to get out of bed or perform basic daily functions; persists regardless of sleep or rest',
                'emergency_warning_signs' => 'Fatigue accompanied by chest pain or shortness of breath,Thoughts of self-harm or severe hopelessness',
                'created_at' => now(),
                'updated_at' => now(),
                
                   'min_days' => 2,
                  'max_days' => 5,
            ]

        ]);
    }
}