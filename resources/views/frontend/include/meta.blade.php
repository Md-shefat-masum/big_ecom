    @php
        $title = isset($meta['title'])? $meta['title'] : 'Chittagong Computed Limited';
        $classification = isset($meta['classification'])? $meta['classification'] : 'Ecommerce';
        $identifier = url('');
        $directory = "submission";
        $category = "Internet";
        $coverage = "Worldwide";
        $distribution = "Global";
        $target = "all";
        $rating = "General";
        $HandheldFriendly = "True";
        $developer = "Tech park it limited";
        $developer_company = "Tech park it limited";
        $author = "Chittagong Computer";
        $developer_email = "developer@techparkit.org";
        $copyright = url('');
        $revisit = "1 days";
        $price = isset($meta['price'])? $meta['price'] : 'Call for price - 01733-080350';

        $keywords = isset($meta['keywords'])? $meta['keywords'] : "Ctg computer, Chittagong computer, Computer, Buy computer, Buy pc, Buy custom pc, Build pc, Build your own pc";
        $description = isset($meta['description'])? $meta['description'] : "A perfect It solution for building your dream pc. Let's Make Your Best Pc with us.";


        $og_title = isset($meta['og_title'])? $meta['og_title'] : "Ctg computer. A perfect It solution. Let's Make Your Best Pc";
        $og_site_name = isset($meta['og_site_name'])? $meta['og_site_name'] : "Chittagong computer";
        $og_description = isset($meta['og_description'])? $meta['og_description'] : "A perfect It solution for building your dream pc. Let's Make Your Best Pc with us.";
        $og_type = isset($meta['og_type'])? $meta['og_type'] : "Ecommerce";
        $og_image = isset($meta['og_image'])? $meta['og_image'] : "https://ctgcomputer.com/contents/frontend/assets/images/logo.png";

        $twitter_title = isset($meta['twitter_title'])? $meta['twitter_title'] : "Ctg computer. A perfect It solution. Let's Make Your Best Pc";
        $twitter_description = isset($meta['twitter_description'])? $meta['twitter_description'] : "A perfect It solution for building your dream pc. Let's Make Your Best Pc with us.";
        $twitter_image = isset($meta['twitter_image'])? $meta['twitter_image'] : "https://ctgcomputer.com/contents/frontend/assets/images/logo.png";
        $twitter_card = isset($meta['twitter_card'])? $meta['twitter_card'] : "summary_large_image";
    @endphp
    <meta name="robots" content="index, follow">
    <!-- <meta http-equiv="refresh" content="5"> -->

    <meta name="Classification" content="{{ $classification }}">
    <title>{{ $title }}</title>
    <meta name="identifier-URL" content="{{ $identifier }}">
    <meta name="directory" content="{{ $directory }}">
    <meta name="category" content="{{ $category }}">
    <meta name="coverage" content="{{ $coverage }}">
    <meta name="distribution" content="{{ $distribution }}">
    <meta name="rating" content="{{ $rating }}">
    <meta name="target" content="{{ $target }}">
    <meta name="HandheldFriendly" content="{{ $HandheldFriendly }}">
    <meta name="author" content="{{ $author }}">
    <meta name="developer" content="{{ $developer }}">
    <meta name="developer-email" content="{{ $developer_email }}">
    <meta name="developer-company" content="{{ $developer_company }}">
    <meta name="copyright" content="{{ $copyright }}">
    <meta name="revisit" content="{{ $revisit }}">
    <meta name="price" content="{{ $price }}">

    <meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}"  > 

    <meta property="og:title" content="{{ $og_title }}" />
    <meta property="og:site_name" content="{{ $og_site_name }}" />
    <meta property="og:description" content="{{ $og_description }}"/>
    <meta property="og:type" content="{{ $og_type }}" />
    <meta property="og:url" content="{{ $identifier }}" />
    <meta property="og:image" content="{{ $og_image }}" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />

    <meta name="twitter:title" content="{{ $twitter_title }}">
    <meta name="twitter:description" content="{{ $twitter_description }}">
    <meta name="twitter:image" content="{{ $twitter_image }}">
    <meta name="twitter:card" content="{{ $twitter_card }}">