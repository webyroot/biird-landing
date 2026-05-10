<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use App\Models\CommunitySection;
use App\Models\MentorSection;
use App\Models\FeatureSection;
use App\Models\VideoSection;
use App\Models\CtaSection;
use App\Models\FooterSection;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    public function run(): void
    {
        // Hero Section
        HeroSection::create([
            'section_anchor_id' => 'hero',
            'badge_text' => 'A WILAN LEADERSHIP PLATFORM',
            'main_title' => "Where African Women rise, lead & thrive",
            'description' => "Biird is your leadership journey companion — connecting you with mentors, cohorts, and a community of women who understand your path and celebrate your growth.",
            'primary_cta_text' => 'Begin Your Journey',
            'primary_cta_link' => '#signup',
            'secondary_cta_text' => 'Talk to Norah',
            'secondary_cta_link' => '#norah',
            'member_count_text' => '10,000+',
            'member_subtitle' => 'women growing together',
            'location_text' => 'Across 40+ African countries & the diaspora',
            'is_active' => true,
        ]);

        // Community Section (Features/WILAN Community)
        CommunitySection::create([
            'section_anchor_id' => 'community',
            'badge_text' => 'WILAN COMMUNITY',
            'headline' => "Your village is here. Your circle is waiting.",
            'subtext' => "A space where African women leaders gather — to mentor, learn, and rise together.",
            'features' => [
                'Mentorship' => ['icon' => 'users', 'description' => 'Connect with experienced leaders who have walked your path'],
                'Peer Circles' => ['icon' => 'user-group', 'description' => 'Find your cohort — women at similar stages, supporting each other'],
                'Growth Tools' => ['icon' => 'chart-bar', 'description' => 'Resources, frameworks, and guides built for African women leaders'],
                'Safe Space' => ['icon' => 'shield-check', 'description' => 'A trusted environment for honest conversations and breakthroughs'],
            ],
            'is_active' => true,
        ]);

        // Mentor Section (Mentor Matching)
        MentorSection::create([
            'section_anchor_id' => 'mentors',
            'badge_text' => 'MENTOR MATCHING',
            'headline' => "Find the guide you've been missing",
            'description' => "Connect with mentors who understand your journey. Book sessions, get guidance, and accelerate your growth.",
            'primary_cta_text' => 'Find My Mentor',
            'secondary_cta_text' => 'Become a Mentor',
            'stats' => [
                ['value' => '200+', 'label' => 'Verified Mentors'],
                ['value' => '15+', 'label' => 'Expertise Areas'],
                ['value' => '5,000+', 'label' => 'Sessions Booked'],
                ['value' => '4.9/5', 'label' => 'Average Rating'],
            ],
            'mentors' => [
                ['name' => 'Amina Diallo', 'role' => 'CEO, TechStart Africa', 'initials' => 'AD', 'tags' => ['Leadership', 'Tech'], 'rating' => 5.0],
                ['name' => 'Zara Mensah', 'role' => 'Founder, GrowthHub', 'initials' => 'ZM', 'tags' => ['Entrepreneurship', 'Marketing'], 'rating' => 4.9],
                ['name' => 'Nia Johnson', 'role' => 'Director, Global Finance', 'initials' => 'NJ', 'tags' => ['Finance', 'Strategy'], 'rating' => 5.0],
                ['name' => 'Sarah Okafor', 'role' => 'Senior Partner, Law & Co', 'initials' => 'SO', 'tags' => ['Legal', 'Negotiation'], 'rating' => 4.8],
            ],
            'is_active' => true,
        ]);

        // Feature Section (Ecosystem - 9 features)
        FeatureSection::create([
            'section_anchor_id' => 'features',
            'badge_text' => 'EVERYTHING YOU NEED TO LEAD',
            'headline' => "Your complete leadership ecosystem",
            'subtext' => "Every tool, every resource, every connection — designed for the journey ahead of you.",
            'features' => [
                ['title' => "Bird's Eye View", 'description' => 'A clear snapshot of your progress, priorities, and next steps.'],
                ['title' => 'Flight Path', 'description' => 'A visual timeline of milestones showing how your leadership is growing.'],
                ['title' => 'Norah', 'description' => 'Brain trust built by experts with over 1,200 years of experience in various industries.'],
                ['title' => 'Flight Guide', 'description' => 'Personalized recommendations shaped by your needs and milestones.'],
                ['title' => 'Biird Notes', 'description' => 'Capture reflections and ideas, organized and easy to revisit.'],
                ['title' => 'Courses', 'description' => 'Learning that meets you where you are, recommended based on your needs.'],
                ['title' => 'Mentorship', 'description' => 'Find mentors and programs that support your personal and professional growth.'],
                ['title' => 'Flight Club', 'description' => 'A quiet, text-based community for shared learning and honest conversation.'],
                ['title' => 'Glideboard', 'description' => 'Break projects and goals into simple steps and move them to completion.'],
            ],
            'is_active' => true,
        ]);

        // Video Section (Meet Norah)
        VideoSection::create([
            'section_anchor_id' => 'videos',
            'badge_text' => 'YOUR LEADERSHIP JOURNEY, GUIDED.',
            'headline' => "Meet Norah",
            'description' => "Get to know Norah and discover how she can support your leadership journey every step of the way.",
            'videos' => [
                ['url' => 'https://www.youtube.com/embed/d0CUS06mD4c', 'title' => 'Lead From The Start'],
                ['url' => 'https://www.youtube.com/embed/JqVE903n4gs', 'title' => 'Own Your Path'],
                ['url' => 'https://www.youtube.com/embed/pHL5cg2EsPU', 'title' => 'Build Confidence'],
                ['url' => 'https://www.youtube.com/embed/I1yqF8KZehM', 'title' => 'Lead with Impact'],
            ],
            'norah_avatar' => 'https://skit-safe-84381466.figma.site/_components/v2/7c80917fb6118a19486fb53e443e1623731215c9/Norah_Avatar.ffa360e7.png',
            'is_active' => true,
        ]);

        // CTA Section
        CtaSection::create([
            'section_anchor_id' => 'join',
            'headline' => "If you're an African woman ready to grow — this is your place.",
            'description' => "Biird was built in the understanding that your leadership journey is uniquely yours. The challenges, the brilliance, the ambition, the context — all of it is welcome here.",
            'tags' => [
                'Women in corporate',
                'Entrepreneurs & founders',
                'Emerging leaders',
                'Diaspora professionals',
                'Career changers',
            ],
            'cta_text' => "Join Biird Today — It's Free",
            'cta_link' => '#signup',
            'is_active' => true,
        ]);

        // Footer Section
        FooterSection::create([
            'badge_text' => 'A WILAN INSTITUTE PLATFORM',
            'description' => "Your Leadership Journey Companion. Built for African women, by people who believe in your flight.",
            'social_links' => [
                ['platform' => 'YouTube', 'url' => '#', 'icon' => 'youtube'],
                ['platform' => 'LinkedIn', 'url' => '#', 'icon' => 'linkedin'],
                ['platform' => 'Instagram', 'url' => '#', 'icon' => 'instagram'],
                ['platform' => 'Facebook', 'url' => '#', 'icon' => 'facebook'],
            ],
            'platform_links' => ['WILAN Community', 'Mentor Marketplace', 'Courses', 'Glideboard', 'Flight Club'],
            'company_links' => ['About Biird', 'Become a Mentor', 'Blog', 'Careers', 'Press'],
            'support_links' => ['Help Centre', 'Community Guidelines', 'Contact Us', 'Privacy Policy', 'Terms of Service'],
            'copyright_text' => '2026 WILAN Institute. All rights reserved. Built by One Brand',
            'is_active' => true,
        ]);
    }
}
