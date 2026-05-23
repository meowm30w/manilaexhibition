<?php
/**
 * SEO landing page data and helpers.
 *
 * @package Manila_Exhibition
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function manila_exhibition_public_pages() {
    static $pages = null;

    if ( null !== $pages ) {
        return $pages;
    }

    $service_area = 'Manila, Metro Manila, Pasay, Makati, Quezon City, Taguig, BGC, Bulacan, and project locations across the Philippines';

    $service_faqs = array(
        array(
            'question' => 'How early should we request a quote?',
            'answer'   => 'The best time to request a quote is as soon as you have an event date, venue, floor plan, booth size, and basic design direction. Earlier planning gives the team more room to recommend practical materials, production schedules, and installation requirements.',
        ),
        array(
            'question' => 'Can you handle design, fabrication, delivery, installation, and dismantling?',
            'answer'   => 'Yes. Manila Exhibition can support the project from concept planning and booth fabrication through delivery, onsite installation, turnover, and dismantling when required by the event or venue.',
        ),
        array(
            'question' => 'What details help you prepare an accurate quotation?',
            'answer'   => 'Please include your event date, venue, booth or space size, floor plan, brand guidelines, design references, target budget, installation deadline, and any venue requirements you already have.',
        ),
    );

    $portfolio_items = manila_exhibition_portfolio_items();

    $pages = array(
        'services/exhibition-booth-contractor-philippines' => array(
            'type'        => 'service',
            'title'       => 'Exhibition Booth Contractor Philippines | Manila Exhibition',
            'description' => 'Need an exhibition booth contractor in the Philippines? Manila Exhibition handles booth design, fabrication, delivery, installation, and dismantling for trade shows and expos.',
            'h1'          => 'Exhibition Booth Contractor in the Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'Manila Exhibition is an exhibition booth contractor in the Philippines for brands that need professional booth design, booth fabrication, logistics, installation, turnover, and dismantling support.',
            'keywords'    => 'exhibition booth contractor Philippines, exhibition booth builder Philippines, booth fabrication Philippines, trade show booth contractor Manila, exhibition booth construction Manila',
            'serviceType' => 'Exhibition booth contractor services',
            'sections'    => array(
                array(
                    'heading' => 'End-to-end exhibition booth contractor services',
                    'body'    => array(
                        'A trade show booth is often the first physical brand experience a visitor sees. Manila Exhibition helps brands plan and build booths that look credible, support sales conversations, and work within real event constraints.',
                        'Our team supports custom exhibition booths for expos, product launches, conferences, and trade fairs in Manila, Metro Manila, Bulacan, and nationwide project locations. The work can include concept direction, layout planning, booth fabrication, graphics, counters, storage, lighting, delivery, onsite installation, and turnover.',
                    ),
                ),
                array(
                    'heading' => 'What we handle',
                    'list'    => array(
                        'Booth design direction and practical layout planning',
                        'Custom booth fabrication, counters, partitions, and branded structures',
                        'Graphics, lighting, storage areas, display zones, and visitor flow planning',
                        'Production scheduling, delivery, installation, finishing, and turnover',
                        'Dismantling support when required by the event or venue',
                    ),
                ),
                array(
                    'heading' => 'Booth types we build',
                    'body'    => array(
                        'We build compact shell-scheme upgrades, custom island booths, product display booths, meeting booths, trade show stands, event booths, modular booth elements, branded counters, and custom exhibition stand builder projects. Each booth is planned around your floor area, brand standards, products, traffic flow, and deadline.',
                    ),
                ),
                array(
                    'heading' => 'Service areas and venues',
                    'body'    => array(
                        'We support booth fabrication Philippines projects across ' . $service_area . '. For Manila trade shows, our work can support exhibitors preparing for SMX Convention Center, World Trade Center Metro Manila, hotel conventions, mall events, and brand activations.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth design and build', 'url' => '/services/exhibition-booth-design-build/' ),
                array( 'label' => 'Event booth fabrication Manila', 'url' => '/services/event-booth-fabrication/' ),
                array( 'label' => 'Solar & Storage Live Philippines 2026 booth projects', 'url' => '/case-studies/solar-storage-live-philippines-2026-booth-projects/' ),
                array( 'label' => 'View portfolio', 'url' => '/portfolio/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/exhibition-booth-design-build' => array(
            'type'        => 'service',
            'title'       => 'Exhibition Booth Design Philippines | Design & Build',
            'description' => 'Custom exhibition booth design and build services for brands joining expos, trade fairs, and product launches in the Philippines.',
            'h1'          => 'Exhibition Booth Design and Build in the Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'Custom exhibition booth design in the Philippines should balance brand impact, visitor flow, production feasibility, and venue requirements. We plan and build booths that are polished, practical, and ready for the show floor.',
            'keywords'    => 'exhibition booth design Philippines, custom exhibition booth Philippines, exhibition booth builder Philippines, trade show booth design Philippines',
            'serviceType' => 'Exhibition booth design and build',
            'sections'    => array(
                array(
                    'heading' => 'Custom booth design that supports brand goals',
                    'body'    => array(
                        'A strong exhibition booth is not only attractive. It guides visitors, presents products clearly, creates useful meeting areas, and gives your brand a professional physical presence. Manila Exhibition works from your brief, event goals, and brand references to shape a booth direction that fits your space and timeline.',
                        'The design process considers traffic flow, product display, counter placement, storage, signage visibility, lighting, and how staff will use the booth during the event.',
                    ),
                ),
                array(
                    'heading' => '3D concept, layout, materials, and fabrication',
                    'list'    => array(
                        '3D concept direction and booth layout planning',
                        'Visitor flow and product display planning',
                        'Material, lighting, graphics, counter, and storage recommendations',
                        'Workshop fabrication and quality checking',
                        'Delivery, onsite installation, finishing, and turnover',
                    ),
                ),
                array(
                    'heading' => 'Portfolio examples',
                    'body'    => array(
                        'Relevant booth projects include Routes Asia airport booth work, Shenzhen Airport, Xian Airport, Alphaess, S-Power Corporation, ZEISS, and other custom exhibition stand projects in the Manila Exhibition portfolio.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Solar & Storage Live Philippines 2026 booth projects', 'url' => '/case-studies/solar-storage-live-philippines-2026-booth-projects/' ),
                array( 'label' => 'Routes Asia recent project', 'url' => '/case-studies/dalian-international-airport-exhibition-booth/' ),
                array( 'label' => 'Request a project quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/mall-kiosk-fabrication' => array(
            'type'        => 'service',
            'title'       => 'Mall Kiosk Fabrication Philippines | Custom Kiosks',
            'description' => 'Custom mall kiosk fabrication for branded retail counters, food kiosks, product displays, and pop-up retail spaces across the Philippines.',
            'h1'          => 'Mall Kiosk Fabrication in the Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'Manila Exhibition fabricates custom mall kiosks, retail counters, food kiosks, product display counters, and pop-up retail spaces for brands that need durable, polished, and practical customer-facing builds.',
            'keywords'    => 'mall kiosk fabrication Philippines, kiosk fabricator Manila, custom mall kiosk Philippines, retail kiosk fabrication Philippines',
            'serviceType' => 'Mall kiosk fabrication',
            'sections'    => array(
                array(
                    'heading' => 'Custom kiosk design and fabrication',
                    'body'    => array(
                        'A mall kiosk needs to attract attention, organize products, support staff workflow, and handle daily use. We build kiosks with practical counter heights, storage, lighting, branding, electrical preparation, and finishes that match the brand environment.',
                        'Each kiosk is planned around your mall guidelines, product handling, customer flow, maintenance needs, and installation schedule.',
                    ),
                ),
                array(
                    'heading' => 'Kiosk types and inclusions',
                    'list'    => array(
                        'Mall counters, product kiosks, food kiosks, and sampling counters',
                        'Custom counters, storage, display shelves, and branded panels',
                        'Durable surfaces, lighting, electrical preparation, and signage zones',
                        'Production, transport, installation planning, and turnover support',
                    ),
                ),
                array(
                    'heading' => 'Related project',
                    'body'    => array(
                        'The San Miguel Kiosk project shows how custom kiosk fabrication can combine a branded counter, warm finishes, display function, and compact retail usability.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Retail display fabrication', 'url' => '/services/retail-display-fabrication/' ),
                array( 'label' => 'San Miguel kiosk recent project', 'url' => '/case-studies/san-miguel-mall-kiosk-fabrication/' ),
                array( 'label' => 'Request a kiosk quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/retail-display-fabrication' => array(
            'type'        => 'service',
            'title'       => 'Retail Display Fabrication Philippines | Custom Displays',
            'description' => 'Custom retail display fabrication for product displays, pop-ups, counters, fixtures, and branded retail environments in the Philippines.',
            'h1'          => 'Retail Display Fabrication Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'We fabricate custom retail displays, product stands, pop-up counters, branded fixtures, and promotional display structures for launches, mall activations, and in-store campaigns.',
            'keywords'    => 'retail display fabrication Philippines, retail display maker Philippines, custom retail displays Philippines, pop-up booth builder Philippines',
            'serviceType' => 'Retail display fabrication',
            'sections'    => array(
                array(
                    'heading' => 'Custom retail displays and branded fixtures',
                    'body'    => array(
                        'Retail displays need to make products easy to understand, easy to reach, and easy to remember. Manila Exhibition fabricates display counters, product shelves, pop-up booths, branded fixtures, launch displays, and retail rollout elements that support product visibility and staff use.',
                    ),
                ),
                array(
                    'heading' => 'What we build',
                    'list'    => array(
                        'Product display stands, counters, shelves, plinths, and fixtures',
                        'Pop-up booths for launches, sampling, and mall activations',
                        'Branded retail structures with graphics, lighting, and display zones',
                        'Short-run custom display builds and multi-location rollout support',
                    ),
                ),
                array(
                    'heading' => 'Materials and finishes',
                    'body'    => array(
                        'We recommend materials based on display life span, mobility, budget, finish quality, and installation conditions. Options can include woodwork, laminates, acrylic, metal details, lighting, printed graphics, counters, and specialty fabricated elements.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Mall kiosk fabrication', 'url' => '/services/mall-kiosk-fabrication/' ),
                array( 'label' => 'Event booth fabrication', 'url' => '/services/event-booth-fabrication/' ),
                array( 'label' => 'View portfolio', 'url' => '/portfolio/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/commercial-fit-out' => array(
            'type'        => 'service',
            'title'       => 'Commercial Fit-Out Contractor Philippines | Retail & Office',
            'description' => 'Commercial fit-out services for retail stores, offices, showrooms, hospitality spaces, counters, partitions, and branded interiors in the Philippines.',
            'h1'          => 'Commercial Fit-Out Contractor Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'Manila Exhibition provides commercial interior fit-out support for retail spaces, offices, showrooms, hospitality venues, branded counters, partitions, display areas, and custom interior fabrication.',
            'keywords'    => 'commercial fit-out contractor Philippines, commercial interior fit-out Philippines, retail fit-out contractor Philippines, office fit-out fabrication Philippines',
            'serviceType' => 'Commercial interior fit-out',
            'sections'    => array(
                array(
                    'heading' => 'Commercial interior fit-out services',
                    'body'    => array(
                        'A commercial fit-out should look aligned with the brand while staying functional for daily operations. We support fit-out scopes involving counters, partitions, wall finishes, display surfaces, branded interiors, furniture, and specialty fabrication.',
                        'Our fabrication background helps clients who need interiors with custom counters, display structures, and brand-focused details built with practical coordination.',
                    ),
                ),
                array(
                    'heading' => 'Spaces we support',
                    'list'    => array(
                        'Retail stores, kiosks, showrooms, offices, hospitality spaces, and branded interiors',
                        'Counters, partitions, shelves, reception areas, display fixtures, and wall treatments',
                        'Fabrication, finishing, installation coordination, and project turnover support',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Custom fabrication', 'url' => '/services/custom-fabrication/' ),
                array( 'label' => 'Retail display fabrication', 'url' => '/services/retail-display-fabrication/' ),
                array( 'label' => 'Request a project quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/event-booth-fabrication' => array(
            'type'        => 'service',
            'title'       => 'Event Booth Fabrication Manila | Activation Booths',
            'description' => 'Custom event booth fabrication for product launches, brand activations, sampling counters, pop-up booths, and trade show displays in Manila and the Philippines.',
            'h1'          => 'Event Booth Fabrication in Manila',
            'eyebrow'     => 'Service',
            'lede'        => 'We fabricate event booths, activation builds, product launch booths, sampling counters, pop-up booths, roadshow structures, and branded event spaces for campaigns in Manila and across the Philippines.',
            'keywords'    => 'event booth fabrication Manila, event activation booth Philippines, activation booth builder Philippines, event booth contractor Metro Manila',
            'serviceType' => 'Event booth fabrication',
            'sections'    => array(
                array(
                    'heading' => 'Event booths and activation builds',
                    'body'    => array(
                        'Event booths need to be memorable, fast to install, and practical for staff and visitors. Manila Exhibition supports activations that require custom fabrication, counters, branded backdrops, display surfaces, product zones, and lighting.',
                    ),
                ),
                array(
                    'heading' => 'Best for launches, sampling, and roadshows',
                    'list'    => array(
                        'Product launches, sampling booths, mall activations, and roadshow displays',
                        'Portable, modular, and fully custom booth fabrication',
                        'Fast timeline planning, delivery, installation, and turnover coordination',
                    ),
                ),
                array(
                    'heading' => 'Related project',
                    'body'    => array(
                        'Phil-Asian Gaming Expo is a strong example of a large-scale event booth fabrication project with bold custom structure, branded surfaces, and high-impact trade show visibility.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Phil-Asian Gaming Expo recent project', 'url' => '/case-studies/rolling-bet-event-booth-fabrication/' ),
                array( 'label' => 'Solar & Storage Live Philippines 2026 booth projects', 'url' => '/case-studies/solar-storage-live-philippines-2026-booth-projects/' ),
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Request a quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        ),
        'services/custom-fabrication' => array(
            'type'        => 'service',
            'title'       => 'Custom Fabrication Company Philippines | Booths, Kiosks & Displays',
            'description' => 'Custom fabrication for exhibition booths, mall kiosks, counters, retail displays, furniture, branded spaces, and specialty builds in the Philippines.',
            'h1'          => 'Custom Fabrication Company in the Philippines',
            'eyebrow'     => 'Service',
            'lede'        => 'Manila Exhibition is a custom fabrication company in the Philippines for booths, kiosks, retail displays, counters, partitions, branded spaces, furniture, and specialty builds.',
            'keywords'    => 'custom fabrication company Philippines, custom booth fabrication Philippines, custom kiosk fabrication Philippines, custom display fabrication Philippines',
            'serviceType' => 'Custom fabrication',
            'sections'    => array(
                array(
                    'heading' => 'Custom fabrication for branded spaces',
                    'body'    => array(
                        'Custom fabrication is useful when a brand needs a physical build that cannot be solved by an off-the-shelf display. We fabricate counters, partitions, furniture, product displays, custom booth components, mall kiosk elements, and specialty structures for brand environments.',
                    ),
                ),
                array(
                    'heading' => 'Workshop production and quality checking',
                    'body'    => array(
                        'Our process covers measurements, material recommendations, production planning, fabrication, finishing, quality checks, transport, installation, and final turnover. We focus on surfaces, edges, lighting integration, structure, usability, and brand presentation.',
                    ),
                ),
                array(
                    'heading' => 'Common fabrication scopes',
                    'list'    => array(
                        'Custom booth fabrication, counters, furniture, display structures, and partitions',
                        'Kiosk fabrication, retail display fabrication, branded fixtures, and specialty builds',
                        'Woodwork, laminates, acrylic, lighting details, graphics, and finished surfaces',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Commercial fit-out contractor', 'url' => '/services/commercial-fit-out/' ),
                array( 'label' => 'Mall kiosk fabrication', 'url' => '/services/mall-kiosk-fabrication/' ),
                array( 'label' => 'Solar & Storage Live Philippines 2026 booth projects', 'url' => '/case-studies/solar-storage-live-philippines-2026-booth-projects/' ),
                array( 'label' => 'View recent projects', 'url' => '/case-studies/' ),
            ),
            'faqs'        => $service_faqs,
        ),
    );

    $location_pages = array(
        'locations/manila' => array( 'title' => 'Exhibition Booth Contractor Manila | Manila Exhibition', 'h1' => 'Exhibition Booth Contractor in Manila', 'place' => 'Manila', 'desc' => 'Exhibition booth contractor services in Manila for trade shows, product launches, retail displays, kiosks, event booths, and custom fabrication projects.' ),
        'locations/metro-manila' => array( 'title' => 'Exhibition Booth Contractor Metro Manila | Booths, Kiosks & Displays', 'h1' => 'Exhibition Booth Contractor in Metro Manila', 'place' => 'Metro Manila', 'desc' => 'Booth design, booth fabrication, kiosk fabrication, retail display fabrication, and event booth builds for brands across Metro Manila.' ),
        'locations/pasay' => array( 'title' => 'Exhibition Booth Contractor Pasay | SMX & WTC Booth Builds', 'h1' => 'Exhibition Booth Contractor in Pasay', 'place' => 'Pasay', 'desc' => 'Exhibition booth contractor support in Pasay for SMX Convention Center, World Trade Center Metro Manila, trade shows, expos, and event activations.' ),
        'locations/makati' => array( 'title' => 'Exhibition Booth Contractor Makati | Event Booths & Displays', 'h1' => 'Exhibition Booth Contractor in Makati', 'place' => 'Makati', 'desc' => 'Event booth fabrication, exhibition booth design, retail displays, commercial fit-outs, and custom fabrication support for Makati-based brands.' ),
        'locations/quezon-city' => array( 'title' => 'Booth Fabrication Quezon City | Kiosks, Displays & Event Booths', 'h1' => 'Booth Fabrication Services in Quezon City', 'place' => 'Quezon City', 'desc' => 'Booth fabrication, kiosk fabrication, retail display fabrication, custom counters, and branded event build support for Quezon City projects.' ),
        'locations/bgc-taguig' => array( 'title' => 'Event Booth Fabrication BGC & Taguig | Manila Exhibition', 'h1' => 'Event Booth Fabrication in BGC and Taguig', 'place' => 'BGC and Taguig', 'desc' => 'Event booth fabrication, activation booths, retail displays, and custom branded spaces for BGC and Taguig launches, corporate events, and campaigns.' ),
        'locations/bulacan' => array( 'title' => 'Booth Fabrication Bulacan | Manila Exhibition', 'h1' => 'Booth Fabrication and Custom Builds in Bulacan', 'place' => 'Bulacan', 'desc' => 'Booth fabrication, kiosk fabrication, custom woodwork, retail displays, and commercial fit-out support from Manila Exhibition in Bulacan.' ),
    );

    foreach ( $location_pages as $path => $location ) {
        $pages[ $path ] = array(
            'type'        => 'location',
            'title'       => $location['title'],
            'description' => $location['desc'],
            'h1'          => $location['h1'],
            'eyebrow'     => 'Location',
            'lede'        => $location['desc'],
            'serviceType' => 'Exhibition booth and event fabrication services in ' . $location['place'],
            'sections'    => array(
                array(
                    'heading' => 'Services available in ' . $location['place'],
                    'body'    => array(
                        'Manila Exhibition supports brands in ' . $location['place'] . ' with exhibition booth design and build, booth fabrication, mall kiosk fabrication, retail display fabrication, event booth fabrication, commercial fit-out work, and custom fabrication.',
                        'Projects are planned around your venue, installation schedule, floor plan, access rules, material requirements, budget, and target date. Our team helps align the brief, production, logistics, installation, and turnover so your project is ready when it matters.',
                    ),
                ),
                array(
                    'heading' => 'Logistics and installation planning',
                    'body'    => array(
                        'For local and Metro Manila projects, the practical details matter: ingress schedules, delivery routes, manpower, venue requirements, electrical preparation, graphics, finishing, and final turnover. We help prepare the build scope and timeline before fabrication begins.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Event booth fabrication Manila', 'url' => '/services/event-booth-fabrication/' ),
                array( 'label' => 'Request a project quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        );
    }

    $venue_pages = array(
        'venues/smx-convention-center' => array(
            'title'       => 'Booth Contractor for SMX Convention Center Manila | Manila Exhibition',
            'description' => 'Booth contractor support for exhibitors preparing exhibition booths, trade show stands, counters, and event displays for SMX Convention Center Manila.',
            'h1'          => 'Booth Contractor for SMX Convention Center Manila',
            'venue'       => 'SMX Convention Center Manila',
            'keywords'    => 'booth contractor near SMX, SMX booth contractor Manila, exhibition booth builder SMX Manila',
        ),
        'venues/world-trade-center-metro-manila' => array(
            'title'       => 'Booth Contractor near World Trade Center Metro Manila',
            'description' => 'Trade show booth contractor and exhibition booth construction support near World Trade Center Metro Manila for expos, events, and product launches.',
            'h1'          => 'Booth Contractor near World Trade Center Metro Manila',
            'venue'       => 'World Trade Center Metro Manila',
            'keywords'    => 'booth contractor near World Trade Center Metro Manila, trade show booth contractor Manila, exhibition booth construction Manila',
        ),
    );

    foreach ( $venue_pages as $path => $venue ) {
        $pages[ $path ] = array(
            'type'        => 'venue',
            'title'       => $venue['title'],
            'description' => $venue['description'],
            'h1'          => $venue['h1'],
            'eyebrow'     => 'Venue planning',
            'lede'        => 'Manila Exhibition supports exhibitors preparing custom booths, counters, displays, event booths, and fabrication scopes for projects at or near ' . $venue['venue'] . '.',
            'keywords'    => $venue['keywords'],
            'serviceType' => 'Booth contractor support for ' . $venue['venue'],
            'sections'    => array(
                array(
                    'heading' => 'Booth planning for ' . $venue['venue'],
                    'body'    => array(
                        'A venue-ready booth requires more than a good concept. The build must consider ingress schedule, floor plan, booth size, venue guidelines, power needs, delivery timing, installation manpower, graphics, lighting, finishing, and dismantling requirements.',
                        'Our team can help translate your booth brief into a practical design and fabrication plan, then coordinate production, delivery, installation, turnover, and dismantling support when required.',
                    ),
                ),
                array(
                    'heading' => 'Recommended preparation details',
                    'list'    => array(
                        'Event name, booth number, booth size, and event dates',
                        'Official floor plan, organizer guidelines, and ingress schedule',
                        'Brand references, design goals, required counters, displays, and storage',
                        'Target budget, approval timeline, and installation deadline',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Exhibition booth design and build', 'url' => '/services/exhibition-booth-design-build/' ),
                array( 'label' => 'Request a project quote', 'url' => '/request-a-quote/' ),
            ),
            'faqs'        => $service_faqs,
        );
    }

    $pages['portfolio'] = manila_exhibition_portfolio_page( $portfolio_items );
    $pages['case-studies/solar-storage-live-philippines-2026-booth-projects'] = manila_exhibition_solar_storage_event_page();
    $pages['case-studies'] = manila_exhibition_case_studies_index();
    foreach ( manila_exhibition_case_study_pages() as $path => $page ) {
        $pages[ $path ] = $page;
    }
    $pages['request-a-quote'] = manila_exhibition_request_quote_page();
    $pages['thank-you'] = manila_exhibition_thank_you_page();
    $pages['blog'] = manila_exhibition_blog_index();
    foreach ( manila_exhibition_blog_pages() as $path => $page ) {
        $pages[ $path ] = $page;
    }

    return $pages;
}

function manila_exhibition_portfolio_items() {
    return array(
        array( 'title' => 'Solar & Storage Live Philippines 2026', 'category' => 'Exhibition Booth Design & Build', 'image' => 'recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif', 'url' => '/case-studies/solar-storage-live-philippines-2026-booth-projects/', 'description' => 'Custom exhibition booth projects for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar at Solar & Storage Live Philippines 2026.', 'cta' => 'View Event Projects' ),
        array( 'title' => 'Routes Asia', 'category' => 'Airport Booth Projects', 'image' => 'portfolio/dalian-01.jpg', 'url' => '/case-studies/dalian-international-airport-exhibition-booth/', 'description' => 'Airport and aviation booth builds for Routes Asia, held March 10 to 12 at Waterfront Cebu City Hotel and Casino in Cebu City.' ),
        array( 'title' => 'Phil-Asian Gaming Expo', 'category' => 'Gaming Expo Booth', 'image' => 'portfolio/phil-asian-gaming-expo-booth-01.png', 'url' => '/case-studies/rolling-bet-event-booth-fabrication/', 'description' => 'One of the biggest booth builds for Phil-Asian Gaming Expo, designed for strong brand visibility and visitor engagement at SMX Convention Center.' ),
        array( 'title' => 'San Miguel Kiosk', 'category' => 'Mall Kiosks', 'image' => 'portfolio/kiosk-01.png', 'url' => '/case-studies/san-miguel-mall-kiosk-fabrication/', 'description' => 'Mall kiosk fabrication with branded counter, wood-look finish, and compact retail use.' ),
        array( 'title' => 'Shenzhen Airport', 'category' => 'Exhibition Booths', 'image' => 'portfolio/shenzen-01.jpg', 'url' => '/case-studies/shenzhen-airport-exhibition-stand/', 'description' => 'Exhibition stand build with illuminated counter and professional hospitality zones.' ),
        array( 'title' => 'ZEISS', 'category' => 'Exhibition Booths', 'image' => 'more-work/more-work-17.jpg', 'url' => '/case-studies/zeiss-exhibition-booth-design/', 'description' => 'Brand-focused exhibition booth design and fabrication for a clean professional presence.' ),
        array( 'title' => 'Alphaess', 'category' => 'Custom Fabrication', 'image' => 'more-work/more-work-02.jpg', 'url' => '/case-studies/alphaess-custom-exhibition-stand/', 'description' => 'Custom exhibition stand with branded product presentation and polished finishing.' ),
        array( 'title' => 'Asiana Airlines', 'category' => 'Exhibition Booths', 'image' => 'more-work/more-work-03.jpg', 'url' => '/case-studies/asiana-airlines-exhibition-booth/', 'description' => 'Exhibition booth project for aviation brand presentation and visitor engagement.' ),
        array( 'title' => 'S-Power Corporation', 'category' => 'Custom Fabrication', 'image' => 'more-work/more-work-13.jpg', 'url' => '/case-studies/s-power-corporation-booth-fabrication/', 'description' => 'Booth fabrication project with practical display areas and branded surfaces.' ),
    );
}

function manila_exhibition_solar_storage_event_projects() {
    return array(
        array(
            'slug'        => 'longi',
            'name'        => 'LONGi',
            'heading'     => 'LONGi Exhibition Booth',
            'background'  => 'LONGi is a global solar technology company focused on photovoltaic wafers, cells, modules, and solar solutions. The company is known for its work across the solar PV value chain and its role in supporting the global clean energy transition.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the LONGi booth build with a professional exhibition setup designed for strong brand visibility, product presentation, and visitor engagement in a competitive clean energy trade show environment.',
            'details'     => array(
                'Category'    => 'Exhibition Booth Design & Build',
                'Industry'    => 'Solar / Renewable Energy',
                'Event'       => 'Solar & Storage Live Philippines 2026',
                'Client type' => 'Major sponsor',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif', 'alt' => 'LONGi exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1536, 'height' => 2048 ),
                array( 'file' => 'recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-updated-01.png', 'alt' => 'LONGi solar exhibition booth project by Manila Exhibition', 'width' => 988, 'height' => 633 ),
                array( 'file' => 'recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-updated-02.png', 'alt' => 'LONGi exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1448, 'height' => 1086 ),
            ),
        ),
        array(
            'slug'        => 'blue-carbon',
            'name'        => 'Blue Carbon',
            'heading'     => 'Blue Carbon Exhibition Booth',
            'background'  => 'Blue Carbon Technology is a photovoltaic product and micro-energy storage solutions company focused on R&D, manufacturing, sales, service, and diversified clean energy product solutions.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the Blue Carbon booth build with branded booth structures, clean product presentation areas, and a professional trade show environment for solar and energy storage visitors.',
            'details'     => array(
                'Category'    => 'Exhibition Booth Fabrication',
                'Industry'    => 'Solar / Energy Storage',
                'Event'       => 'Solar & Storage Live Philippines 2026',
                'Client type' => 'Major sponsor',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-01.png', 'alt' => 'Blue Carbon exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1448, 'height' => 1086 ),
                array( 'file' => 'recent-event/blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-02.png', 'alt' => 'Blue Carbon exhibition booth product display for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1454, 'height' => 1082 ),
            ),
        ),
        array(
            'slug'        => 'powerway',
            'name'        => 'Powerway',
            'heading'     => 'Powerway Exhibition Booth',
            'background'  => 'Powerway is a solar mounting and clean energy solutions company focused on solar mounting systems, utility-scale solar projects, and reliable PV project support.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the Powerway booth build with a professional exhibition setup designed for clean brand presentation, visitor interaction, and product-focused display in a renewable energy trade show environment.',
            'details'     => array(
                'Category' => 'Exhibition Booth Fabrication',
                'Industry' => 'Solar / Renewable Energy',
                'Event'    => 'Solar & Storage Live Philippines 2026',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/powerway-exhibition-booth-solar-storage-live-philippines-2026-01.jpeg', 'alt' => 'Powerway exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1600, 'height' => 1200 ),
                array( 'file' => 'recent-event/powerway-exhibition-booth-solar-storage-live-philippines-2026-updated-01.png', 'alt' => 'Powerway solar exhibition booth project by Manila Exhibition', 'width' => 882, 'height' => 671 ),
                array( 'file' => 'recent-event/powerway-exhibition-booth-solar-storage-live-philippines-2026-updated-02.png', 'alt' => 'Powerway trade show booth display for Solar & Storage Live Philippines 2026', 'width' => 695, 'height' => 627 ),
            ),
        ),
        array(
            'slug'        => 'suninergy',
            'name'        => 'Suninergy',
            'heading'     => 'Suninergy Exhibition Booth',
            'background'  => 'Suninergy is part of the clean energy and photovoltaic power sector, with work connected to solar power development and industrial and commercial energy solutions across China and Southeast Asia, including the Philippines.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the Suninergy booth presentation with a clean exhibition setup designed for brand visibility, visitor interaction, and solar industry product communication.',
            'details'     => array(
                'Category' => 'Exhibition Booth Fabrication',
                'Industry' => 'Solar / Renewable Energy',
                'Event'    => 'Solar & Storage Live Philippines 2026',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/suninergy-exhibition-booth-solar-storage-live-philippines-2026-01.png', 'alt' => 'Suninergy exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1331, 'height' => 998 ),
                array( 'file' => 'recent-event/suninergy-exhibition-booth-solar-storage-live-philippines-2026-02.png', 'alt' => 'Suninergy solar exhibition booth project by Manila Exhibition', 'width' => 1450, 'height' => 1026 ),
            ),
        ),
        array(
            'slug'        => 'bluetti',
            'name'        => 'BLUETTI',
            'heading'     => 'BLUETTI Exhibition Booth',
            'background'  => 'BLUETTI is a clean energy and energy storage brand known for portable power stations, solar generators, battery packs, and renewable energy storage solutions for homes, businesses, outdoor use, emergency backup, and off-grid applications.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the BLUETTI booth build with a product-focused exhibition setup designed to highlight portable power, energy storage, and visitor engagement in a high-traffic event setting.',
            'details'     => array(
                'Category' => 'Exhibition Booth Design & Build',
                'Industry' => 'Energy Storage / Portable Power',
                'Event'    => 'Solar & Storage Live Philippines 2026',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/bluetti-exhibition-booth-solar-storage-live-philippines-2026-02.jpeg', 'alt' => 'BLUETTI exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1600, 'height' => 1200 ),
                array( 'file' => 'recent-event/bluetti-exhibition-booth-solar-storage-live-philippines-2026-01.jfif', 'alt' => 'BLUETTI custom booth display for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1600, 'height' => 1200 ),
            ),
        ),
        array(
            'slug'        => 'hd-solar',
            'name'        => 'HD Solar',
            'heading'     => 'HD Solar Exhibition Booth',
            'background'  => 'HD Solar, also known through Hangzhou Huading New Energy, provides solar mounting systems and clean energy technology solutions. Its materials describe the company as involved in R&D, design, manufacturing, and sales of photovoltaic-related products and solutions, including solar tracking and mounting systems.',
            'description' => 'For Solar & Storage Live Philippines 2026, Manila Exhibition supported the HD Solar booth build with a professional exhibition setup designed for solar mounting product presentation, clear brand visibility, and visitor engagement.',
            'details'     => array(
                'Category' => 'Exhibition Booth Fabrication',
                'Industry' => 'Solar / Renewable Energy',
                'Event'    => 'Solar & Storage Live Philippines 2026',
            ),
            'images'      => array(
                array( 'file' => 'recent-event/hd-solar-exhibition-booth-solar-storage-live-philippines-2026-updated-01.png', 'alt' => 'HD Solar solar mounting exhibition booth project by Manila Exhibition', 'width' => 1448, 'height' => 1086 ),
                array( 'file' => 'recent-event/hd-solar-exhibition-booth-solar-storage-live-philippines-2026-updated-02.png', 'alt' => 'HD Solar exhibition booth for Solar & Storage Live Philippines 2026 by Manila Exhibition', 'width' => 1448, 'height' => 1086 ),
            ),
        ),
    );
}

function manila_exhibition_solar_storage_event_page() {
    return array(
        'type'        => 'event-portfolio',
        'title'       => 'Solar & Storage Live Philippines 2026 Booth Projects | Manila Exhibition',
        'description' => 'View custom exhibition booth projects by Manila Exhibition for Solar & Storage Live Philippines 2026, featuring booth builds for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar.',
        'og_description' => 'Custom exhibition booth projects for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar by Manila Exhibition.',
        'h1'          => 'Solar & Storage Live Philippines 2026 Booth Projects',
        'eyebrow'     => 'Recent Event Project',
        'lede'        => 'Manila Exhibition supported multiple solar and energy brands at Solar & Storage Live Philippines 2026 with custom exhibition booth fabrication, branded display structures, graphics, lighting, product display areas, and onsite setup support.',
        'og_image'    => 'recent-event/blue-carbon-exhibition-booth-solar-storage-live-philippines-2026-01.png',
        'serviceType' => 'Exhibition booth fabrication and trade show booth construction',
        'breadcrumb_parent' => array(
            'name' => 'Recent Projects',
            'url'  => '/case-studies/',
        ),
        'event_details' => array(
            'Event' => 'Solar & Storage Live Philippines 2026',
            'Date' => 'May 19 to 20, 2026',
            'Venue' => 'SMX Convention Center, Pasay City',
            'Industry' => 'Solar, energy storage, renewable energy, clean energy, power technology',
            'Booth clients' => 'LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, HD Solar',
            'Major sponsor booths built' => 'LONGi and Blue Carbon',
            'Service' => 'Exhibition booth fabrication, branded booth structures, graphics, lighting, product display areas, delivery, and onsite setup',
            'Contractor' => 'Manila Exhibition and Event Contractor',
        ),
        'booth_projects' => manila_exhibition_solar_storage_event_projects(),
        'overview' => array(
            'heading' => 'About Solar & Storage Live Philippines 2026',
            'body' => array(
                'Solar & Storage Live Philippines is a major clean energy exhibition and conference for solar, energy storage, power, renewable energy, and clean technology companies. The event brings together exhibitors, buyers, installers, distributors, project developers, policymakers, solution providers, and technology leaders in a high-traffic trade show environment.',
                'For exhibitors, a well-built booth is important because it helps communicate technical solutions clearly, attract visitors, display products, and create a professional space for business conversations. Manila Exhibition helped support booth builds for multiple brands at the event, including LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar.',
            ),
        ),
        'projects_intro' => array(
            'heading' => 'Exhibition Booths Built for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar',
            'body' => 'For this event, our team worked on custom exhibition booth builds for solar and energy brands that needed strong visibility, professional product presentation, branded graphics, and practical spaces for visitor engagement.',
        ),
        'scope' => array(
            'Custom exhibition booth fabrication',
            'Branded booth wall structures',
            'Logo signage and brand graphics',
            'Large-format printed panels',
            'Product display areas',
            'Counters and visitor discussion areas',
            'Lighting and finishing',
            'Delivery and onsite installation',
            'Final booth touch-ups',
            'Installation, dismantling, and delivery support',
        ),
        'why' => array(
            'heading' => 'Designed for Brand Presence, Product Display, and Visitor Engagement',
            'body' => array(
                'Solar and energy brands often need to present technical products, systems, and solutions in a way that is clear and easy to understand. A strong exhibition booth helps visitors quickly recognize the brand, understand the offer, view products or displays, and start meaningful sales conversations.',
                'For Solar & Storage Live Philippines 2026, the booth builds focused on visibility, clean presentation, branded graphics, practical meeting space, and a professional event-ready finish.',
            ),
        ),
        'related' => array(
            array( 'label' => 'Exhibition Booth Design & Build', 'url' => '/services/exhibition-booth-design-build/' ),
            array( 'label' => 'Exhibition Booth Contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
            array( 'label' => 'Event Booth Fabrication', 'url' => '/services/event-booth-fabrication/' ),
            array( 'label' => 'Custom Fabrication', 'url' => '/services/custom-fabrication/' ),
            array( 'label' => 'Portfolio', 'url' => '/portfolio/' ),
            array( 'label' => 'Request a Quote', 'url' => '/request-a-quote/' ),
        ),
        'faqs' => array(),
    );
}

function manila_exhibition_portfolio_page( $items ) {
    return array(
        'type'        => 'portfolio',
        'title'       => 'Exhibition Booth, Kiosk & Fit-Out Portfolio | Manila Exhibition',
        'description' => 'View exhibition booths, mall kiosks, event booths, retail displays, and commercial fit-out projects by Manila Exhibition and Event Contractor.',
        'h1'          => 'Exhibition Booth, Kiosk, and Fit-Out Portfolio',
        'eyebrow'     => 'Portfolio',
        'lede'        => 'Browse selected exhibition booths, event booths, mall kiosks, retail displays, commercial fit-outs, and custom fabrication projects built for local and international brands.',
        'items'       => $items,
    );
}

function manila_exhibition_case_studies_index() {
    $featured_event = array(
        array(
            'title'       => 'Solar & Storage Live Philippines 2026 Booth Projects',
            'category'    => 'Recent Event Project',
            'image'       => 'recent-event/longi-exhibition-booth-solar-storage-live-philippines-2026-03.jfif',
            'url'         => '/case-studies/solar-storage-live-philippines-2026-booth-projects/',
            'description' => 'Custom exhibition booth projects for LONGi, Blue Carbon, Powerway, Suninergy, BLUETTI, and HD Solar at Solar & Storage Live Philippines 2026.',
            'cta'         => 'View Recent Project',
        ),
    );

    return array(
        'type'        => 'case-studies',
        'title'       => 'Recent Exhibition Booth Projects | Manila Exhibition',
        'description' => 'Explore recent exhibition booth, kiosk, event booth, retail display, and custom fabrication projects from Manila Exhibition.',
        'h1'          => 'Recent Exhibition Booth and Fabrication Projects',
        'eyebrow'     => 'Recent Projects',
        'lede'        => 'A focused archive of selected booth, kiosk, event booth, retail display, and custom fabrication projects.',
        'items'       => array_merge( $featured_event, manila_exhibition_case_study_cards() ),
    );
}

function manila_exhibition_case_study_cards() {
    return array(
        array( 'title' => 'Routes Asia Airport Booth Projects', 'slug' => 'dalian-international-airport-exhibition-booth', 'image' => 'portfolio/dalian-01.jpg', 'category' => 'Airport and Aviation Booth Projects' ),
        array( 'title' => 'Phil-Asian Gaming Expo Booth Project', 'slug' => 'rolling-bet-event-booth-fabrication', 'image' => 'portfolio/phil-asian-gaming-expo-booth-01.png', 'category' => 'Large-Scale Custom Exhibition Booth' ),
        array( 'title' => 'San Miguel Mall Kiosk Fabrication', 'slug' => 'san-miguel-mall-kiosk-fabrication', 'image' => 'portfolio/kiosk-01.png', 'category' => 'Mall Kiosk Fabrication' ),
        array( 'title' => 'Shenzhen Airport Exhibition Stand', 'slug' => 'shenzhen-airport-exhibition-stand', 'image' => 'portfolio/shenzen-01.jpg', 'category' => 'Exhibition Stand' ),
        array( 'title' => 'ZEISS Exhibition Booth Design', 'slug' => 'zeiss-exhibition-booth-design', 'image' => 'more-work/more-work-17.jpg', 'category' => 'Exhibition Booth Design' ),
        array( 'title' => 'Alphaess Custom Exhibition Stand', 'slug' => 'alphaess-custom-exhibition-stand', 'image' => 'more-work/more-work-02.jpg', 'category' => 'Custom Exhibition Stand' ),
        array( 'title' => 'Asiana Airlines Exhibition Booth', 'slug' => 'asiana-airlines-exhibition-booth', 'image' => 'more-work/more-work-03.jpg', 'category' => 'Exhibition Booth' ),
        array( 'title' => 'S-Power Corporation Booth Fabrication', 'slug' => 's-power-corporation-booth-fabrication', 'image' => 'more-work/more-work-13.jpg', 'category' => 'Booth Fabrication' ),
    );
}

function manila_exhibition_case_study_pages() {
    $cards = manila_exhibition_case_study_cards();
    $pages = array();

    foreach ( $cards as $card ) {
        $pages[ 'case-studies/' . $card['slug'] ] = array(
            'type'        => 'case-study',
            'title'       => $card['title'] . ' | Manila Exhibition',
            'description' => $card['title'] . ' project overview, scope of work, design and fabrication approach, gallery, and related services from Manila Exhibition.',
            'h1'          => $card['title'],
            'eyebrow'     => 'Case study',
            'lede'        => 'A selected project example showing Manila Exhibition support for ' . strtolower( $card['category'] ) . ', custom fabrication, finishing, and project turnover.',
            'image'       => $card['image'],
            'project'     => array(
                'name'     => str_replace( array( ' Exhibition Booth', ' Event Booth Fabrication', ' Mall Kiosk Fabrication', ' Exhibition Stand', ' Exhibition Booth Design', ' Custom Exhibition Stand', ' Booth Fabrication' ), '', $card['title'] ),
                'service'  => $card['category'],
                'industry' => 'Brand, aviation, energy, event, or retail project',
                'location' => 'Project location confirmed during client coordination',
            ),
            'sections'    => array(
                array(
                    'heading' => 'Project overview',
                    'body'    => array(
                        'This project reflects the kind of visual, functional, and fabrication work Manila Exhibition provides for brands that need a professional physical presence. The build focused on creating a clear visitor-facing environment with branded surfaces, display zones, and practical onsite use.',
                    ),
                ),
                array(
                    'heading' => 'Scope of work',
                    'list'    => array(
                        'Project planning and build coordination',
                        'Custom fabrication of booth, kiosk, display, or event elements',
                        'Branding surfaces, counters, display areas, and finish details',
                        'Delivery, onsite installation support, finishing, and turnover',
                    ),
                ),
                array(
                    'heading' => 'Design and fabrication approach',
                    'body'    => array(
                        'The approach balanced brand visibility, clean finishing, visitor flow, and practical installation. Materials, surfaces, lighting, and structural details were considered around the available space, project timeline, and intended customer experience.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Custom fabrication', 'url' => '/services/custom-fabrication/' ),
                array( 'label' => 'Request a similar project quote', 'url' => '/request-a-quote/' ),
            ),
        );
    }

    $pages['case-studies/dalian-international-airport-exhibition-booth'] = array(
        'type'        => 'case-study',
        'title'       => 'Routes Asia Airport Booth Projects | Manila Exhibition',
        'description' => 'View airport and aviation booth projects by Manila Exhibition for Routes Asia, the route development forum for Asia held at Waterfront Cebu City Hotel and Casino in Cebu City.',
        'h1'          => 'Routes Asia Airport Booth Projects',
        'eyebrow'     => 'Recent Project',
        'lede'        => 'Manila Exhibition supported airport and aviation booth projects for Routes Asia, the route development forum for Asia. The event brought together airlines, airports, tourism authorities, and aviation decision-makers for meetings, networking, conference sessions, and route development discussions.',
        'image'       => 'portfolio/dalian-01.jpg',
        'project'     => array(
            'name'     => 'Routes Asia',
            'service'  => 'Airport and aviation exhibition booth projects',
            'industry' => 'Aviation, airports, tourism, route development',
            'location' => 'Waterfront Cebu City Hotel and Casino, Cebu City, Philippines',
        ),
        'sections'    => array(
            array(
                'heading' => 'Project overview',
                'body'    => array(
                    'Held March 10 to 12 at Waterfront Cebu City Hotel and Casino in Cebu City, Routes Asia provided a professional environment for aviation brands and airport groups to present destinations, routes, infrastructure, and partnership opportunities.',
                    'The booth work supported airport and aviation presentation needs with branded structures, graphics, display areas, and practical visitor-facing spaces.',
                ),
            ),
            array(
                'heading' => 'Project details',
                'list'    => array(
                    'Event: Routes Asia',
                    'Date: March 10 to 12',
                    'Venue: Waterfront Cebu City Hotel and Casino',
                    'Location: Cebu City, Philippines',
                    'Industry: Aviation, airports, tourism, route development',
                    'Project type: Airport and aviation exhibition booth projects',
                    'Service: Exhibition booth fabrication, branded booth structures, graphics, display areas, and onsite setup',
                ),
            ),
            array(
                'heading' => 'Design and fabrication approach',
                'body'    => array(
                    'The approach supported destination, route, and airport brand presentation with polished booth surfaces, meeting-friendly areas, and clear visual hierarchy for trade show conversations.',
                ),
            ),
        ),
        'related'     => array(
            array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
            array( 'label' => 'Exhibition booth design and build', 'url' => '/services/exhibition-booth-design-build/' ),
            array( 'label' => 'Request a similar project quote', 'url' => '/request-a-quote/' ),
        ),
    );

    $pages['case-studies/rolling-bet-event-booth-fabrication'] = array(
        'type'        => 'case-study',
        'title'       => 'Phil-Asian Gaming Expo Booth Project | Manila Exhibition',
        'description' => 'View Manila Exhibition\'s booth project for Phil-Asian Gaming Expo, a major gaming and entertainment trade event at SMX Convention Center with exhibitors from across the industry.',
        'h1'          => 'Phil-Asian Gaming Expo Booth Project',
        'eyebrow'     => 'Recent Project',
        'lede'        => 'Manila Exhibition supported a large-scale booth build for Phil-Asian Gaming Expo, a major gaming and entertainment trade event held at SMX Convention Center. This was one of the biggest booths built for the event.',
        'image'       => 'portfolio/phil-asian-gaming-expo-booth-01.png',
        'project'     => array(
            'name'     => 'Phil-Asian Gaming Expo',
            'service'  => 'Large-scale custom exhibition booth',
            'industry' => 'Gaming, entertainment, online game suppliers, payment solutions, industry support services',
            'location' => 'SMX Convention Center, Pasay City',
        ),
        'sections'    => array(
            array(
                'heading' => 'Project overview',
                'body'    => array(
                    'The Phil-Asian Gaming Expo brought together gaming suppliers, product and payment solution providers, and industry support services in a high-traffic trade show environment.',
                    'The booth was created to deliver a strong brand presence, support visitor engagement, and provide a professional trade show space for meetings, product communication, and event visibility.',
                ),
            ),
            array(
                'heading' => 'Project details',
                'list'    => array(
                    'Event: Phil-Asian Gaming Expo',
                    'Venue: SMX Convention Center, Pasay City',
                    'Industry: Gaming, entertainment, online game suppliers, payment solutions, industry support services',
                    'Project type: Large-scale custom exhibition booth',
                    'Service: Booth fabrication, branded booth structure, graphics, lighting, display areas, onsite setup',
                ),
            ),
            array(
                'heading' => 'Design and fabrication approach',
                'body'    => array(
                    'The booth build focused on scale, visibility, branded presence, and visitor engagement for a major gaming and entertainment trade event.',
                ),
            ),
        ),
        'gallery'     => array(
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-01.png', 'alt' => 'Phil-Asian Gaming Expo booth project by Manila Exhibition' ),
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-03.jpg', 'alt' => 'Phil-Asian Gaming Expo custom booth with branded display and visitor area' ),
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-04.jpg', 'alt' => 'Rolling Bet booth project for Phil-Asian Gaming Expo by Manila Exhibition' ),
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-05.jpg', 'alt' => 'Phil-Asian Gaming Expo booth fabrication detail by Manila Exhibition' ),
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-06.jpg', 'alt' => 'Phil-Asian Gaming Expo branded booth display by Manila Exhibition' ),
            array( 'file' => 'portfolio/phil-asian-gaming-expo-booth-07.jpg', 'alt' => 'Phil-Asian Gaming Expo trade show booth by Manila Exhibition' ),
        ),
        'related'     => array(
            array( 'label' => 'Event booth fabrication', 'url' => '/services/event-booth-fabrication/' ),
            array( 'label' => 'Custom fabrication', 'url' => '/services/custom-fabrication/' ),
            array( 'label' => 'Request a similar project quote', 'url' => '/request-a-quote/' ),
        ),
    );

    return $pages;
}

function manila_exhibition_request_quote_page() {
    return array(
        'type'        => 'quote',
        'title'       => 'Request an Exhibition Booth Quote | Manila Exhibition',
        'description' => 'Send your booth, kiosk, retail display, fit-out, or event activation brief to Manila Exhibition and request a practical project quote.',
        'h1'          => 'Request a Project Quote',
        'eyebrow'     => 'Start your project',
        'lede'        => 'Send your project details and the Manila Exhibition project team will review your brief, timeline, location, and requirements.',
    );
}

function manila_exhibition_thank_you_page() {
    return array(
        'type'        => 'thank-you',
        'title'       => 'Thank You | Manila Exhibition',
        'description' => 'Thank you for your inquiry. Manila Exhibition will review your project details and contact you with next steps.',
        'h1'          => 'Thank you for your inquiry',
        'eyebrow'     => 'Inquiry received',
        'lede'        => 'We received your project inquiry. Our team will review your details and contact you with the next steps.',
    );
}

function manila_exhibition_blog_index() {
    return array(
        'type'        => 'blog-index',
        'title'       => 'Exhibition Booth Planning & Fabrication Blog | Manila Exhibition',
        'description' => 'Practical guides on exhibition booth design, booth construction costs, kiosk fabrication, retail displays, event activation booths, and trade show planning in the Philippines.',
        'h1'          => 'Exhibition Booth and Fabrication Insights',
        'eyebrow'     => 'Insights',
        'lede'        => 'Practical planning guides for exhibition booths, kiosk fabrication, retail displays, event activations, and trade show preparation in the Philippines.',
    );
}

function manila_exhibition_blog_pages() {
    $posts = array(
        'how-to-choose-exhibition-booth-contractor-philippines' => array(
            'title' => 'How to Choose an Exhibition Booth Contractor in the Philippines',
            'description' => 'Learn how to evaluate an exhibition booth contractor in the Philippines based on portfolio, process, fabrication quality, communication, and installation support.',
            'sections' => array(
                array( 'heading' => 'Start with proof of real build work', 'body' => array( 'The right exhibition booth contractor should show real booth, kiosk, display, and fabrication work. Look for projects with clear images, finished details, and scopes similar to your own event. A portfolio tells you more than a sales promise because it shows how the team handles brand visibility, counters, display zones, lighting, surfaces, and onsite presentation.' ) ),
                array( 'heading' => 'Check the process, not only the price', 'body' => array( 'A low quote can become expensive if the process is unclear. Ask how the contractor handles design, drawings, material recommendations, production, delivery, ingress, installation, finishing, turnover, and dismantling. The strongest booth builders in the Philippines explain the steps clearly and ask for details before final pricing.' ) ),
                array( 'heading' => 'Review communication and practical project management', 'body' => array( 'Trade show work has real deadlines. You need a team that can respond, confirm requirements, and coordinate decisions before production starts. Share your event date, venue, floor plan, booth size, brand references, and budget range. A reliable contractor will use those details to recommend a build approach that matches your timeline.' ) ),
                array( 'heading' => 'Ask about venue and installation readiness', 'body' => array( 'For events at SMX Convention Center, World Trade Center Metro Manila, hotels, malls, or other venues, planning should include ingress schedules, access rules, electrical requirements, manpower, logistics, and final turnover. A polished booth is only useful if it arrives and installs properly.' ) ),
                array( 'heading' => 'Make the final decision on fit', 'body' => array( 'Choose the contractor that understands your brand goals, provides practical recommendations, shows relevant project proof, and can coordinate the work from brief to turnover. The best fit is not always the cheapest option; it is the team most likely to deliver a finished booth without unnecessary stress.' ) ),
            ),
        ),
        'exhibition-booth-construction-cost-philippines' => array(
            'title' => 'Exhibition Booth Construction Cost in the Philippines: What Affects Pricing?',
            'description' => 'Understand the main factors that affect exhibition booth construction cost in the Philippines, including size, materials, design complexity, location, and schedule.',
            'sections' => array(
                array( 'heading' => 'Booth size and layout', 'body' => array( 'Booth size is one of the first cost drivers. A compact booth with a counter and backdrop requires a different scope from a large island booth with overhead signage, meeting areas, storage, lighting, and custom display structures. The layout also affects material volume, manpower, transport, and installation time.' ) ),
                array( 'heading' => 'Design complexity and custom fabrication', 'body' => array( 'Curved structures, suspended-looking forms, custom counters, specialty finishes, integrated lighting, product displays, and detailed brand elements require more production time and more skilled fabrication. A simple design can be efficient, but a highly customized booth needs a more detailed production plan.' ) ),
                array( 'heading' => 'Materials, finishes, graphics, and lighting', 'body' => array( 'Materials affect both price and appearance. Laminates, acrylic, metal details, printed graphics, LED lighting, display hardware, flooring, and furniture all change the final quotation. The goal is to choose materials that match the brand, event duration, and budget without creating unnecessary maintenance problems.' ) ),
                array( 'heading' => 'Venue, logistics, and timeline', 'body' => array( 'Projects in Manila, Pasay, Makati, Quezon City, Taguig, Bulacan, or other areas may have different delivery and installation conditions. Rush timelines can also increase pressure on materials, production scheduling, overtime, and transport. Earlier planning usually leads to better options.' ) ),
                array( 'heading' => 'How to request a practical quote', 'body' => array( 'Send your event date, venue, booth size, floor plan, design references, required counters or displays, target budget, and installation deadline. With those details, Manila Exhibition can prepare a practical quote based on the real build scope rather than a generic estimate.' ) ),
            ),
        ),
        'exhibition-booth-design-tips-manila' => array(
            'title' => 'Exhibition Booth Design Tips for Trade Shows in Manila',
            'description' => 'Practical exhibition booth design tips for Manila trade shows, including visitor flow, signage, product display, lighting, counters, and staff usability.',
            'sections' => array(
                array( 'heading' => 'Make the brand message visible quickly', 'body' => array( 'Visitors decide quickly whether to stop at a booth. Your brand name, core message, product category, and visual identity should be easy to understand from the aisle. Strong signage and clean hierarchy matter more than filling every surface with text.' ) ),
                array( 'heading' => 'Plan visitor flow before decoration', 'body' => array( 'A beautiful booth can fail if people cannot move through it comfortably. Consider where visitors enter, where staff stand, where products are displayed, and where private conversations happen. A practical booth layout supports traffic flow and avoids blocking important areas.' ) ),
                array( 'heading' => 'Use lighting and counters with purpose', 'body' => array( 'Lighting should highlight products, graphics, and key surfaces. Counters should support registration, sampling, product demonstration, or sales conversations. Every element should have a role in the booth experience.' ) ),
                array( 'heading' => 'Prepare for installation conditions', 'body' => array( 'Trade show venues in Manila often have strict schedules. Good booth design considers how pieces will be transported, assembled, finished, and turned over onsite. Practical construction planning reduces last-minute stress.' ) ),
                array( 'heading' => 'Connect design decisions to your goal', 'body' => array( 'Before finalizing the design, define whether the booth must generate leads, display products, host meetings, launch a product, or support brand awareness. The booth should be built around that goal, not around decoration alone.' ) ),
            ),
        ),
        'smx-convention-center-booth-preparation-guide' => array( 'title' => 'SMX Convention Center Booth Preparation Guide for Exhibitors', 'description' => 'A practical guide for exhibitors preparing booth requirements, floor plans, timelines, and installation details for SMX Convention Center events.' ),
        'world-trade-center-metro-manila-booth-preparation-guide' => array( 'title' => 'World Trade Center Metro Manila Booth Preparation Guide', 'description' => 'Planning notes for exhibitors preparing trade show booths, event displays, and installation requirements near World Trade Center Metro Manila.' ),
        'mall-kiosk-fabrication-philippines-guide' => array( 'title' => 'Mall Kiosk Fabrication in the Philippines: Design, Materials, and Requirements', 'description' => 'A guide to mall kiosk fabrication in the Philippines, including design planning, materials, counters, storage, durability, and mall installation requirements.' ),
        'retail-display-fabrication-guide' => array( 'title' => 'Retail Display Fabrication: How to Make Products Stand Out In-Store', 'description' => 'Learn how custom retail displays, counters, shelves, lighting, and branded fixtures help products stand out in store and at activations.' ),
        'event-activation-booth-ideas-philippines' => array( 'title' => 'Event Activation Booth Ideas for Product Launches and Sampling Campaigns', 'description' => 'Event activation booth ideas for product launches, sampling campaigns, mall activations, roadshows, and branded pop-up experiences in the Philippines.' ),
    );

    $pages = array();
    foreach ( $posts as $slug => $post ) {
        $pages[ 'blog/' . $slug ] = array(
            'type'        => 'blog',
            'title'       => $post['title'] . ' | Manila Exhibition',
            'description' => $post['description'],
            'h1'          => $post['title'],
            'eyebrow'     => 'Guide',
            'lede'        => $post['description'],
            'sections'    => isset( $post['sections'] ) ? $post['sections'] : array(
                array(
                    'heading' => 'Planning guide',
                    'body'    => array(
                        'This guide helps brands prepare better booth, kiosk, retail display, or event activation briefs before requesting a quote. The key is to confirm the event date, venue, available space, installation conditions, brand references, and practical build goals before production begins.',
                        'Manila Exhibition can review your brief and recommend a practical next step for booth fabrication, kiosk fabrication, retail display fabrication, event booth fabrication, or custom fabrication in the Philippines.',
                    ),
                ),
            ),
            'related'     => array(
                array( 'label' => 'Exhibition booth contractor Philippines', 'url' => '/services/exhibition-booth-contractor-philippines/' ),
                array( 'label' => 'Request a project quote', 'url' => '/request-a-quote/' ),
            ),
        );
    }

    return $pages;
}
