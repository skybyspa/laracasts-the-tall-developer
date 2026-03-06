<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'title' => 'Cybersecurity Analyst',
                'company' => 'Nexora Health Systems',
                'location' => 'Remote',
                'type' => 'Full-time',
                'details' => 'At Nexora Health Systems, the Cybersecurity Analyst will
                                monitor, detect, and respond to security threats across
                                clinical and administrative networks, implementing robust
                                threat intelligence frameworks and compliance protocols
                                aligned with HIPAA and ISO 27001 standards. This role
                                partners closely with IT infrastructure and legal teams.'
            ],
            [
                'title' => 'Fullstack developer',
                'company' => 'Acme Corp',
                'location' => 'Remote',
                'type' => 'Part-time',
                'details' => 'At Almond Corporation, the Full Stack Developer will 
                                design, develop, and maintain scalable web applications 
                                using modern front-end frameworks and robust backend 
                                architectures to support high-performance business 
                                solutions. This role collaborates cross-functionally 
                                with product, design, and DevOps teams.'
            ],
            [
                'title' => 'DevOps Engineer',
                'company' => 'Brightforge Studios',
                'location' => 'Remote',
                'type' => 'Full-time',
                'details' => 'At Brightforge Studios, the DevOps Engineer will
                                architect and maintain CI/CD pipelines, container
                                orchestration platforms, and cloud infrastructure to
                                support rapid game deployment cycles across multiple
                                platforms. This role bridges development and operations
                                to ensure seamless, scalable release workflows.'
            ],
            [
                'title' => 'Cloud Solutions Architect',
                'company' => 'Verdant Energy Co.',
                'location' => 'Hybrid',
                'type' => 'Full-time',
                'details' => 'At Verdant Energy Co., the Cloud Solutions Architect will
                                lead the migration and modernisation of legacy energy
                                management systems to scalable cloud platforms, defining
                                technical standards and governance frameworks for a
                                distributed, multi-region infrastructure. This role
                                advises senior leadership on long-term cloud strategy.'
            ],
            [
                'title' => 'Machine Learning Engineer',
                'company' => 'Polaris Logistics',
                'location' => 'Remote',
                'type' => 'Full-time',
                'details' => 'At Polaris Logistics, the Machine Learning Engineer will
                                develop and deploy predictive models for route
                                optimisation, demand forecasting, and supply chain
                                anomaly detection, integrating ML solutions directly into
                                operational platforms serving thousands of daily users.
                                This role collaborates with data science and engineering.'
            ],
            [
                'title' => 'Business Intelligence Developer',
                'company' => 'Morrow & Klein Legal',
                'location' => 'Hybrid',
                'type' => 'Part-time',
                'details' => 'At Morrow & Klein Legal, the Business Intelligence
                                Developer will build and maintain reporting dashboards,
                                data models, and self-service analytics tools that
                                surface actionable insights across case management,
                                billing, and client operations for firm leadership.
                                This role bridges legal operations and data strategy.'
            ],
            [
                'title' => 'Mobile Application Developer',
                'company' => 'Solace Consumer Brands',
                'location' => 'Remote',
                'type' => 'Contract',
                'details' => 'At Solace Consumer Brands, the Mobile Application
                                Developer will design, build, and iterate on iOS and
                                Android applications that deliver seamless shopping
                                and loyalty experiences to millions of customers,
                                maintaining high performance and accessibility standards
                                throughout the product lifecycle. This role works within
                                a cross-functional agile product squad.'
            ],
            [
                'title' => 'ERP Systems Specialist',
                'company' => 'Ironclad Manufacturing Group',
                'location' => 'On-site',
                'type' => 'Full-time',
                'details' => 'At Ironclad Manufacturing Group, the ERP Systems
                                Specialist will configure, maintain, and continuously
                                improve enterprise resource planning platforms spanning
                                procurement, production, and finance, driving process
                                automation and user adoption across global facilities.
                                This role liaises between operations, finance, and IT.'
            ],
        ];
        

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
