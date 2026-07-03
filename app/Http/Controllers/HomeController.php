<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutStats = [
            ['count' => '15+', 'label' => 'Projects Completed'],
            ['count' => '12+', 'label' => 'Technologies Mastered'],
            ['count' => '1+', 'label' => 'Years Internship Exp.'],
            ['count' => '100%', 'label' => 'Clean MVC Code'],
        ];

        $timeline = [
            [
                'period' => '2021 - 2024',
                'title' => 'BSc IT (Bachelor of Science in Information Technology)',
                'institution' => 'University Graduate',
                'description' => 'Built strong foundational knowledge in data structures, algorithms, database systems, object-oriented programming, and web development technologies.',
                'icon' => 'bi-mortarboard-fill',
                'badge' => 'Degree Completed'
            ],
            [
                'period' => '2024',
                'title' => 'PHP Laravel Intern',
                'institution' => 'Web Expert Infotech',
                'description' => 'Worked extensively on real-world enterprise web applications. Designed complex database architectures, built RESTful APIs, implemented secure authentication, and mastered Laravel MVC principles.',
                'icon' => 'bi-briefcase-fill',
                'badge' => 'Industry Experience'
            ],
            [
                'period' => 'Present',
                'title' => "Master's Student & Specialized Laravel Developer",
                'institution' => 'Advanced Computing',
                'description' => 'Deepening technical expertise while developing high-concurrency backend applications, modular software design patterns, and high-performance APIs.',
                'icon' => 'bi-laptop',
                'badge' => 'Active Learning'
            ],
            [
                'period' => 'Learning Path',
                'title' => 'Future Cloud Engineer (AWS)',
                'institution' => 'Self-Paced & Cloud Certifications',
                'description' => 'Currently mastering AWS architecture (EC2, S3, RDS, IAM, CloudFront) to deploy, scale, and manage fault-tolerant enterprise web applications in cloud environments.',
                'icon' => 'bi-cloud-check-fill',
                'badge' => 'Cloud Horizon'
            ]
        ];

        $skills = [
            'Frontend' => [
                ['name' => 'HTML5', 'percent' => 95, 'icon' => 'fa-brands fa-html5 text-danger'],
                ['name' => 'CSS3 & Responsive Design', 'percent' => 90, 'icon' => 'fa-brands fa-css3-alt text-primary'],
                ['name' => 'Bootstrap 5.3', 'percent' => 95, 'icon' => 'fa-brands fa-bootstrap text-purple'],
                ['name' => 'JavaScript (Vanilla & ES6+)', 'percent' => 88, 'icon' => 'fa-brands fa-js text-warning'],
                ['name' => 'GSAP & AOS Animations', 'percent' => 85, 'icon' => 'bi bi-magic text-info'],
            ],
            'Backend' => [
                ['name' => 'PHP 8.3+', 'percent' => 95, 'icon' => 'fa-brands fa-php text-indigo'],
                ['name' => 'Laravel 12 MVC', 'percent' => 96, 'icon' => 'fa-brands fa-laravel text-danger'],
                ['name' => 'RESTful API Architecture', 'percent' => 92, 'icon' => 'bi bi-gear-wide-connected text-success'],
                ['name' => 'Authentication & Guard Security', 'percent' => 90, 'icon' => 'bi bi-shield-lock-fill text-warning'],
                ['name' => 'Blade Template Components', 'percent' => 95, 'icon' => 'bi bi-file-earmark-code-fill text-danger'],
            ],
            'Database' => [
                ['name' => 'MySQL Architecture', 'percent' => 92, 'icon' => 'bi bi-database-fill text-info'],
                ['name' => 'Eloquent ORM & Relationships', 'percent' => 95, 'icon' => 'bi bi-diagram-3-fill text-danger'],
                ['name' => 'Laravel Query Builder', 'percent' => 90, 'icon' => 'bi bi-terminal-fill text-primary'],
                ['name' => 'Database Indexing & Normalization', 'percent' => 88, 'icon' => 'bi bi-cpu-fill text-warning'],
            ],
            'Tools & Cloud' => [
                ['name' => 'Git & GitHub Version Control', 'percent' => 92, 'icon' => 'fa-brands fa-github text-light'],
                ['name' => 'VS Code & PHP Debugging', 'percent' => 96, 'icon' => 'bi bi-code-slash text-primary'],
                ['name' => 'Composer & Package Mgmt', 'percent' => 94, 'icon' => 'bi bi-box-seam-fill text-warning'],
                ['name' => 'Postman API Testing', 'percent' => 90, 'icon' => 'bi bi-send-check-fill text-orange'],
                ['name' => 'Laragon Dev Environment', 'percent' => 95, 'icon' => 'bi bi-hdd-network-fill text-info'],
                ['name' => 'AWS EC2, S3 & IAM (Basics)', 'percent' => 78, 'icon' => 'fa-brands fa-aws text-warning'],
            ]
        ];

        $projects = [
            [
                'id' => 1,
                'title' => 'Society Management System',
                'category' => 'enterprise',
                'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=800&q=80',
                'description' => 'A comprehensive enterprise housing society portal featuring automated monthly maintenance billing, resident import/export tools, notice boards, digital complaints processing, and robust role-based access controls.',
                'tech' => ['Laravel 12', 'PHP 8.3', 'MySQL', 'Bootstrap 5', 'Eloquent ORM', 'AJAX'],
                'features' => [
                    'Automated Monthly Maintenance Billing & Receipts Generator',
                    'Bulk Resident Data Import & Excel Export Operations',
                    'Multi-Role Gate Permission Management (Admin, Secretary, Resident)',
                    'Real-time Complaint Ticket Tracking & Resolution workflow'
                ],
                'github' => 'https://github.com/arpit294/society-management',
                'live' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Resident Import Export Engine',
                'category' => 'backend',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
                'description' => 'High-throughput data processing engine built with Laravel for parsing, sanitizing, validating, and importing thousands of resident records from CSV/XLSX spreadsheets in seconds with zero memory overflow.',
                'tech' => ['Laravel Queues', 'Chunked Processing', 'MySQL Transactions', 'Bootstrap UI'],
                'features' => [
                    'Memory-optimized spreadsheet streaming & validation',
                    'Automatic row-level error reporting and rollback protection',
                    'Instant CSV export with custom dynamic column selection'
                ],
                'github' => 'https://github.com/arpit294/resident-engine',
                'live' => '#'
            ],
            [
                'id' => 3,
                'title' => 'Maintenance Billing System',
                'category' => 'enterprise',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80',
                'description' => 'Automated financial engine designed for residential complex accounting. Generates invoices, tracks late payment penalties, handles multiple payment gateways, and generates monthly balance sheet PDFs.',
                'tech' => ['Laravel MVC', 'DomPDF', 'MySQL', 'Payment API', 'Vanilla JS'],
                'features' => [
                    'Dynamic invoice calculation based on square footage or flat tier',
                    'Automated overdue penalty processing with scheduled email alerts',
                    'Audit logs for every transaction and receipt printout'
                ],
                'github' => 'https://github.com/arpit294/maintenance-billing',
                'live' => '#'
            ],
            [
                'id' => 4,
                'title' => 'Role Permission Management Core',
                'category' => 'backend',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80',
                'description' => 'Granular Access Control List (ACL) security framework for Laravel applications. Allows dynamic role assigning, custom permission flags, middleware route interception, and secure session management.',
                'tech' => ['Laravel Gates', 'Custom Middleware', 'PHP 8.3 Security', 'Bootstrap 5'],
                'features' => [
                    'Dynamic UI matrix for assigning granular permissions to roles',
                    'Zero latency caching layer for permission verification checks',
                    'Immune to privilege escalation and CSRF vulnerabilities'
                ],
                'github' => 'https://github.com/arpit294/role-permission-core',
                'live' => '#'
            ],
            [
                'id' => 5,
                'title' => 'Modern Laravel Blog & CMS',
                'category' => 'fullstack',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80',
                'description' => 'An ultra-fast content management system and developer publication platform featuring SEO-friendly slug routes, markdown editing, comment threads, category filtering, and image optimization.',
                'tech' => ['Laravel 12', 'Blade Components', 'SEO Meta Tags', 'Bootstrap 5', 'GSAP'],
                'features' => [
                    'Clean syntax-highlighted code sharing blocks for tutorials',
                    'Automated sitemap generation & search engine optimization',
                    'Interactive reader comment moderation portal'
                ],
                'github' => 'https://github.com/arpit294/laravel-blog-cms',
                'live' => '#'
            ]
        ];

        $experience = [
            [
                'company' => 'Web Expert Infotech',
                'position' => 'PHP Laravel Intern',
                'period' => '2024',
                'location' => 'On-Site / Hybrid Dev Lab',
                'responsibilities' => [
                    'Developed robust modular backend APIs and full-stack web solutions adhering to strict Laravel MVC architectural guidelines.',
                    'Implemented secure authentication, authorization, and multi-guard session management for production web systems.',
                    'Engineered reusable Blade components and responsive Bootstrap interfaces ensuring seamless cross-browser display.',
                    'Designed normalized relational MySQL database schemas, optimized complex joins, and authored clean Eloquent queries.',
                    'Perform rigorous bug fixing, code refactoring, performance profiling, and git version control management within agile sprints.'
                ]
            ]
        ];

        $services = [
            [
                'title' => 'Laravel MVC Development',
                'icon' => 'fa-brands fa-laravel text-danger',
                'desc' => 'Custom enterprise web applications built with scalable Laravel architecture, clean Eloquent models, secure route pipelines, and modular Blade engines.'
            ],
            [
                'title' => 'Admin Panel Development',
                'icon' => 'bi bi-grid-1x2-fill text-info',
                'desc' => 'High-performance bespoke administrative dashboards complete with statistical charts, dynamic CRUD management, role hierarchies, and audit trails.'
            ],
            [
                'title' => 'REST API Architecture',
                'icon' => 'bi bi-cloud-arrow-up-fill text-purple',
                'desc' => 'Secure, RESTful JSON web service endpoints equipped with token authentication (Sanctum/JWT), rate limiting, and comprehensive API documentation.'
            ],
            [
                'title' => 'Database Design & Optimization',
                'icon' => 'bi bi-database-check text-success',
                'desc' => 'Relational database schema modeling, indexing strategies, slow query refactoring, migration blueprints, and automated seeders.'
            ],
            [
                'title' => 'Bug Fixing & Refactoring',
                'icon' => 'bi bi-bug-fill text-warning',
                'desc' => 'Rapid diagnosis of security bottlenecks, legacy code modernization, exception handling, and optimization of server memory footprint.'
            ],
            [
                'title' => 'Website Maintenance & Cloud Deploy',
                'icon' => 'fa-brands fa-aws text-orange',
                'desc' => 'Continuous system monitoring, server updates, security patching, and automated deployments on AWS EC2/S3 infrastructures.'
            ]
        ];

        $certificates = [
            [
                'title' => 'Laravel MVC Architecture Mastery',
                'issuer' => 'Developer Certification Academy',
                'date' => '2024',
                'image' => 'https://images.unsplash.com/photo-1589330694653-ded6df03f754?auto=format&fit=crop&w=600&q=80',
                'desc' => 'Awarded for exceptional mastery of Laravel 12 architecture, RESTful API creation, and database modeling.'
            ],
            [
                'title' => 'PHP 8.3 Advanced Backend Programming',
                'issuer' => 'Backend Engineering Institute',
                'date' => '2024',
                'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80',
                'desc' => 'Certified in modern PHP design patterns, strong typing, asynchronous processes, and memory optimization.'
            ],
            [
                'title' => 'Full Stack Responsive UI Design',
                'issuer' => 'Web Design Council',
                'date' => '2023',
                'image' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=600&q=80',
                'desc' => 'Recognized for creating highly responsive, accessible, and interactive user interfaces using Bootstrap 5 and modern JS.'
            ]
        ];

        return view('home.index', compact('aboutStats', 'timeline', 'skills', 'projects', 'experience', 'services', 'certificates'));
    }
}
