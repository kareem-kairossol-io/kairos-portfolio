<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@kairossol.io'],
            [
                'name' => 'Kairos Super Admin',
                'password' => 'A7t9N6Z|hj!%',
                'is_super_admin' => true,
            ],
        );

        Setting::updateValues(Setting::defaults());

        $defaultFaqs = [
            [
                'question' => 'What types of software can Kairos Solutions build?',
                'answer' => 'We build custom websites, e-commerce platforms, CRM systems, dashboards, customer portals, mobile applications, and internal business tools. Each solution is planned around your workflow and business goals.',
            ],
            [
                'question' => 'Do you provide hosting and technical support after launch?',
                'answer' => 'Yes. We offer managed hosting, deployment, monitoring, backups, security updates, maintenance, and ongoing technical support, so you can work with one partner throughout the system lifecycle.',
            ],
            [
                'question' => 'Can you customise the system around our current workflow?',
                'answer' => 'Yes. We begin by understanding how your team currently works, then shape the features, permissions, processes, and reports around your actual operations.',
            ],
            [
                'question' => 'Do we need an internal technical team?',
                'answer' => 'No. Our managed service is designed for businesses that want reliable software without hiring developers, server administrators, or a full in-house technical team.',
            ],
            [
                'question' => 'How much does a custom software project cost?',
                'answer' => 'The cost depends on the project scope, features, integrations, and support requirements. After an initial discussion, we provide a clear scope, timeline, and estimate.',
            ],
            [
                'question' => 'Can we start with a smaller version and expand later?',
                'answer' => 'Yes. We can begin with the essential features your business needs, then add new modules and improvements as your operations grow.',
            ],
        ];

        foreach ($defaultFaqs as $index => $faq) {
            Faq::query()->updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ],
            );
        }
    }
}
