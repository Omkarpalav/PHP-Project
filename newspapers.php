<?php
// Newspaper list categorized by language
$newspapers = [
    'english' => [
        'Times of India', 'Tribune', 'Telegraph', 'Hindu', 'Hindustan Times', 'Aizawl Post', 'Samay Dainik', 'Morung Express',
        'Peoples Chronicle', 'Assam Rising', 'Millennium Post', 'Kathmandu Post', 'Himalayan Times', 'The Pioneer', 'Gomantak Times',
        'Western Times', 'Dawnlit Post', 'Chandigarh Tribune', 'Active Times', 'News Today', 'Asian Age', 'Telangana Today',
        'Echo of India', 'Sangai Express', 'Sikkim Express', 'Arunachal Times', 'Daily Excelsior', 'Navhind Times', 'Deccan Herald',
        'Financial Express', 'Statesman', 'Indian Express', 'Business Line', 'O Herald O', 'Nagaland Post', 'Meghalaya Guardian',
        'Kashmir Times', 'Deccan Chronicle', 'Assam Tribune', 'Mirror', 'Tripura Times', 'Mid Day', 'Hitavada', 'Business Standard',
        'Mizoram Post', 'Himali Bela', 'Eastern Chronicle', 'New Indian Express', 'Shillong Times', 'North East Times',
        'Financial Chronicle', 'Economic Times', 'Tripura Observer'
    ],
    'hindi' => [
        'Dainik Bhaskar', 'Amar Ujala', 'Dainik Jagran', 'Rashtradoot', 'Dainik Dabang Dunia', 'I-Next', 'Navodaya Times',
        'Dainik Navajyoti', 'Janpath Samachar', 'Dainik Vishwamitra', 'Info India', 'Himalaya Darpan', 'Saamna Times',
        'Salam Duniya', 'Samagya', 'Dainik Savera Times', 'Yuvashakti', 'Adhikar', 'Dainik Herald', 'Hamara Mahanagar',
        'Swadesh', 'Dainik Kashmir Times', 'Sandhya Times', 'Hindustan', 'Nai Dunia', 'Punjab Kesari', 'Rajasthan Patrika',
        'Sanmarg', 'Navbharat Times', 'Nava Bharat', 'Prabhat Khabar', 'Swatantra Vaartha', 'Purvanchal Prahari',
        'Jansatta', 'Daily Hindi Milap', 'Yashobhumi', 'Himachal Dastak'
    ],
    'marathi' => [
        'Maharashtra Times', 'Lokmat', 'Pudhari', 'Sakal', 'Navprabha', 'Dainik Gomantak', 'Navarashtra', 'Mumbai Lakshadeep',
        'Sandhyakal', 'Navakal', 'Prabhat', 'Navshakti', 'Mumbai Choufer', 'Punya Nagari', 'Tarun Bharat', 'Divya Marathi'
    ]
];

// Get the selected newspaper from URL
$currentNewspaper = isset($_GET['newspaper']) ? urldecode($_GET['newspaper']) : 'Times of India';

// Identify language
$language = '';
foreach ($newspapers as $lang => $list) {
    if (in_array($currentNewspaper, $list)) {
        $language = $lang;
        break;
    }
}

// Get other newspapers of the same language
$relatedNewspapers = $language ? array_diff($newspapers[$language], [$currentNewspaper]) : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Obituary</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <!-- Font Awesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Custom CSS -->
  <link href="./style.css" rel="stylesheet" />
</head>

<body>
  <!-- Header Section -->
  <div class="header">
    <a href="https://riyoadvertising.com/index.shtml">
      <img src="/category/images/riyoadvertising-logo.webp" alt="Main Logo" />
    </a>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <nav class="nav-links">
      <a href="index.php">Home</a>
      <div class="dropdown">
        <a href="#" class="dropdown-toggle">Language</a>
        <div class="dropdown-menu">
          <a href="?lang=en">English</a>
          <a href="?lang=hi">Hindi</a>
          <a href="?lang=mr">Marathi</a>
        </div>
      </div>
      <a href="#">Frequently Asked Questions</a>
      <a href="tel:9821984000">Contact Us: 9821984000</a>
    </nav>
  </div>

  <!-- Mobile Slide Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <div class="close-btn" onclick="toggleMenu()">✖</div>
    <a href="index.php">Home</a>
    <div class="mobile-dropdown" onclick="toggleDropdown()">Language ▼</div>
    <div class="mobile-dropdown-menu" id="mobileDropdownMenu">
      <a href="?lang=en">English</a>
      <a href="?lang=hi">Hindi</a>
      <a href="?lang=mr">Marathi</a>
    </div>
    <a href="#">Frequently Asked Questions</a>
  </div>

  <div class="container">
    <!-- Hero Banner Section -->
    <div class="hero-banner row">
      <div class="col-lg-8 col-sm-12">
        <h1 class="heads">
        Book Obituary Ads For <span style="color: #e30a13;">Times of India</span> Online at Lowest Cost
        </h1>
        <div class="location">
          <select id="city-select">
            <option value="">Select Location</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Pune">Pune</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Kanpur">Kanpur</option>
          </select>
          <button class="submit-button" onclick="redirectToNewspapersPage()">Submit</button>
          <a href="https://wa.me/9821984000" target="_blank" class="enquiry-button">Enquiry Now</a>
        </div>
        <div class="row imps">
          <div class="col-sm-4 imp">
            <div class="oval"><i class="fa fa-bolt"></i></div>
            <p class="t-b">Instant Ad Booking</p>
            <p class="pra">
              Find the cheapest newspaper anywhere in India in 30+ languages.
            </p>
          </div>
          <div class="col-sm-4 imp">
            <div class="oval"><i class="fa fa-paint-brush"></i></div>
            <p class="t-b">Free Ad Designing</p>
            <p class="pra">Ad Designing is complimentary! No additional cost.</p>
          </div>
          <div class="col-sm-4 imp">
            <div class="oval"><i class="fa fa-calendar"></i></div>
            <p class="t-b">Flexible Deadline</p>
            <p class="pra">
              Book anytime anywhere with instant support for next day release.
            </p>
          </div>
          <div class="set imp">
            <div class="oval"><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i></div>
            <p class="t-b">Cost Effective</p>
            <p class="pra">
              Book your Advertisement at Lowest Rates. Discounts available in all Newspapers.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 image">
        <img src="/category/images/obituary-ads.png" style="height:350px; width:325px; padding-left:20%" alt="Obituary"/>
      </div>
    </div>
  </div>

  <!-- Scholar Section with Carousel of Logos -->
  <div class="scholar-section">
    <div id="logoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <!-- Carousel Inner -->
      <div class="carousel-inner">
        <!-- First Slide -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <img src="/category/images/Times-Of-India.webp" class="d-block mx-3" alt="Times of India" style = "width:200px;"/>
            <img src="/category/images/Bangalore-mirror.webp" class="d-block mx-3" alt="Bangalore Mirror" style="background-color: white;" />
            <img src="/category/images/Sakal.webp" class="d-block mx-3" alt="Sakal Newspaper" />
            <img src="/category/images/Navbharat-Times.jpg" class="d-block mx-3" alt="Navbharat Times" />
          </div>
        </div>
        <!-- Second Slide -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <img src="/category/images/The-Hindu.webp" class="d-block mx-3" alt="The Hindu" />
            <img src="/category/images/Hindustan-Times.webp" class="d-block mx-3" alt="Hindustan Times" />
            <img src="/category/images/Dainik-Bhaskar.webp" class="d-block mx-3" alt="Dainik Bhaskar" />
            <img src="/category/images/Malayala-Manorama.webp" class="d-block mx-3" alt="Malayala Manorama" />
          </div>
        </div>
        <!-- Third Slide -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <img src="/category/images/Eenadu.webp" class="d-block mx-3" alt="Eenadu" />
            <img src="/category/images/Pudhari.webp" class="d-block mx-3" alt="Pudhari" />
            <img src="/category/images/Economic-Times.webp" class="d-block mx-3" alt="Economic Times" />
            <img src="/category/images/Loksatta.webp" class="d-block mx-3" alt="Loksatta" />
          </div>
        </div>
      </div>
      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#logoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

 <div class="container">
    <h2></h2>
 </div>

 <div class="why-book-section">
        <div class="container">
            <h2 class="pt-3">Why Book Obituary Ad in Times of India Newspaper?</h2>
             <ul>
                <li>
                    Obituary advertisements are published with the specific purpose of finding an eligible and potential groom for a prospective bride and a suitable bride for a prospective groom.</li>
                <li>
                    Obituary newspaper adverts are more like search mediums than for the purpose of promotion and advertisement. Hence newspaper being the most trusted and prevalent mode of looking for Obituary alliances, it is one of the most sought after search medium for prospective brides, grooms, families as well as friends.</li>
                <li>
                    We at Riyo Advertising obligingly lend our help and support for all special and holy matrimony alliances by providing a swift and safe online newspaper booking service, all across India. You can release your Obituary advertisements in your favorite newspaper through Riyo Advertising at no extra charges!!</li>
                <li>
                    Riyo Advertising is the authorised newspaper ad booking agents for 150+ Indian newspapers. Our newspaper tie ups include prodigious names like include Times of India, Hindu, Hindustan Times, Anandabazar Patrika, Dainik Jagran and many other national and regional newspapers.</li>
                <li>
                    We are accredited and recognized by the Indian Newspaper Society (I.N.S) - the primary governing council for all media publications.
                </li>
            </ul>
          
        </div>
</div>

  <!-- New Section for Booking -->
  <div class="new-sec" style="background-color: #DE262D; padding:0;">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="add">
            
            <p class="b-text">Want to book Obituary Ad in Other Newspapers?</p>
            <select id="city-select1">
              <option value="">Select Location</option>
              <option value="Mumbai">Mumbai</option>
              <option value="Delhi">Delhi</option>
              <option value="Bangalore">Bangalore</option>
              <option value="Kolkata">Kolkata</option>
              <option value="Chennai">Chennai</option>
              <option value="Hyderabad">Hyderabad</option>
              <option value="Pune">Pune</option>
              <option value="Ahmedabad">Ahmedabad</option>
              <option value="Jaipur">Jaipur</option>
              <option value="Lucknow">Lucknow</option>
              <option value="Kanpur">Kanpur</option>
            </select>
            <button class="submit-button2" onclick="redirectToNewspapersPage1()">Submit</button>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </div>

  <!-- FAQ Section (Example) -->
  <div class="container my-4">
    <section class="accordion">
      <section id="faq" class="section">
        <div class="container tab inside-content">
          <div itemscope itemtype="https://schema.org/FAQPage">
            <h2 class="pt-5">Frequently Asked Questions</h2>
            <br>
            <!-- FAQ Item 1 -->
            <section class="faq-item">
              <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <label for="faq1" itemprop="name" class="tab__label">
                  <h6>What are Obituary ads?</h6>
                  <span class="arrow"></span>
                </label>
                <input type="checkbox" id="faq1" class="tab__input" />
                <div class="tab__content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>
                        Obituary ads are advertisements placed by individuals or families to seek potential
                        marriage partners. These ads typically include details such as personal information,
                        preferences, and contact details.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- FAQ Item 2 -->
            <section class="faq-item">
              <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <label for="faq2" itemprop="name" class="tab__label">
                  <h6>Where can I place an Obituary ad?</h6>
                  <span class="arrow"></span>
                </label>
                <input type="checkbox" id="faq2" class="tab__input" />
                <div class="tab__content">
                  <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div itemprop="text">
                      <p>
                        You can place Obituary ads in newspapers, on online platforms, and through agencies like Riyo Advertising.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="faq-item">
          <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <label for="faq3" itemprop="name" class="tab__label">
              <h6>How do I write an effective Obituary ad?</h6>
              <span class="arrow"></span>
            </label>
            <input type="checkbox" id="faq3" class="tab__input">
            <div class="tab__content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>An effective Obituary ad should include key details such as:</p>
                  <ul>
                    <li>Age, height, and appearance</li>
                    <li>Education and profession</li>
                    <li>Family background</li>
                    <li>Preferences for the partner (e.g., caste, religion, etc.)</li>
                    <li>Contact details</li>
                  </ul>
                  <p>Riyo Advertising offers personalized marriage ad solutions to help you craft an appealing and effective Obituary ad.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="faq-item">
          <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <label for="faq4" itemprop="name" class="tab__label">
              <h6>Are Obituary ads private?</h6>
              <span class="arrow"></span>
            </label>
            <input type="checkbox" id="faq4" class="tab__input">
            <div class="tab__content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Obituary ads can be private or public depending on where they are placed. Riyo Advertising can help you create ads that are family-based and maintain privacy, especially when using online platforms.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="faq-item">
          <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
            <label for="faq5" itemprop="name" class="tab__label">
              <h6>Can I include a photograph in my Obituary ad?</h6>
              <span class="arrow"></span>
            </label>
            <input type="checkbox" id="faq5" class="tab__input">
            <div class="tab__content">
              <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <div itemprop="text">
                  <p>Yes, many Obituary ad platforms, including Riyo Advertising, allow you to include a photograph. This can help make your marriage proposal ads more attractive and increase your chances of finding a suitable match.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</section>






<div class="container my-4">
    <!-- Dynamic Categories Section -->
    <div class="obituary-category">
      <h2 class="heading">Categories of Obituary Ads</h2>
      <div class="obituary-grid d-flex flex-wrap ">

        <?php foreach ($categories as $category): 
          $slug = generateSlug($category);
          $url = $baseUrl . $slug;
        ?>
          <a href="<?php echo $url; ?>" class="text-decoration-none">
            <div class="category-box border rounded">
              <?php echo $category; ?>
            </div>
          </a>
        <?php endforeach; ?>
        
      </div>
    </div>
  </div>


<div class="container">
  <h2 class="pt-4 how-book">How to Book Obituary Advertisement In Newspapers?</h2>
  <div class="custom-list pt-2">
        <b class="mb-3 ">How to release a Obituary ad online at Riyo Advertising :</b>
        <ul class="list-group list-group-flush pt-2">
            <li class="list-group-item">
                <strong>Select Ad Type:</strong> Choose between Classified Text or Classified Display ads in the Obituary section.
            </li>
            <li class="list-group-item">
                <strong>Select Release Dates:</strong> Pick the publication dates and proceed with payment via online or offline methods.
            </li>
            <li class="list-group-item">
                <strong>Instant Confirmation:</strong> After payment, you'll receive an email confirmation with booking details.
            </li>
            <li class="list-group-item">
                <strong>Invoice & Details:</strong> Upon successful payment, you will get an invoice with complete ad booking details instantly!
            </li>
        </ul>
    </div>

    <p class = "pt-3">Instant and hassle free online newspaper Obituary ad booking at your fingertips through <a href="https://riyoadvertising.com/">riyoadvertising.com</a>!!!</p>

  <h2 class="pt-4 types">Obituary Classified Ads: Text & Display</h2>

      <p class="pt-2">You can now place your Obituary advertisements, be it simple Classified Text ads, be it Classified Display ads  in the following format:</p>

      <ul class= "format">
        <li>
          <b>Classified Text Ads:</b>
            <p>Text ads, also known as run-on-line ads, are the simplest form of advertising in the Obituary section. You can make your Obituary ads more prominent with our online enhancements like coloured backgrounds, ticks, screen borders, etc. They are charged based on the number of lines, characters, or words used in the ad content.</p>
        </li>
        <li>
          <b>Classified Display Ads:</b>
            <p>Display Classifieds are more elaborate ad types, allowing you to upload prospective bride or groom images to grab maximum attention. These ads are more expensive than text adverts but are better at attracting readers' attention. CD ads are charged according to per sq.cm of area occupied by the advertisement.</p>
        </li>
      </ul>
</div>
        </div>

        <div class="footer">
        <h3>Other <?php echo ucfirst($language); ?> Newspapers</h3>
        <p>
            <?php foreach ($relatedNewspapers as $newspaper): ?>
                <a href="?newspaper=<?php echo urlencode($newspaper); ?>"><?php echo $newspaper; ?></a>
            <?php endforeach; ?>
        </p>
    </div>

  <!-- Footer Section -->
  <div class="footer pt-5">
    <div class="container">
      <div class="row">
        <!-- Footer Box 1 -->
        <div class="col-lg-4 col-md-3 col-sm-3 footer-box-1">
          <div class="contact-detail">
            <h2 class="hd2" style="color: white;">Get in Touch</h2>
            <div class="address-panel">
              <p style="color: white;">
                5 Riyo Media House, Patanwala Complex, Lal.Bahadur.Shastri Marg,
                Opp Shreyas Cinema, Near H.P Petrol Pump, Ghatkopar (W), Mumbai Maharashtra 400086
              </p>
              <p>
                <strong style="color: white;">Email :</strong>
                <a href="mailto:info@riyoadvertising.com" style="color: white;"> info@riyoadvertising.com</a>
              </p>
              <i class="fa fa-phone" style="color: white;"></i>
              <a href="tel:(+91)9821984000" style="color: white;"> (+91)9821984000</a>
              <p class="space20"></p>
              <ul class="footer-social mt-20">
                <li>
                  <a href="https://www.facebook.com/RiyoAdvertising/" target="_blank">
                    <i class="fa-brands fa-facebook" style="color: white;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/riyoadvertising?lang=en" target="_blank">
                    <i class="fa-brands fa-twitter" style="color: white;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/riyoadvertising/" target="_blank">
                    <i class="fa-brands fa-instagram" style="color: white;"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.pinterest.com.au/RiyoAdvertising21/" target="_blank">
                    <i class="fa-brands fa-pinterest" style="color: white;"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Footer Box 2 -->
        <div class="col-lg-4 col-md-3 col-sm-3 footer-box-2">
          <h3 class="footer-heading"><a href="#" style="color: white;">Category</a></h3>
          <div class="row">
            <div class="col-lg-6">
              <ul class="bullet6">
                <li><a href="https://riyoadvertising.com/Obituary-ads.html" style="color: white;">Matrimonial</a></li>
                <li><a href="https://riyoadvertising.com/recruitment-ads.html" style="color: white;">Recruitment</a></li>
                <li><a href="https://riyoadvertising.com/changeofname-ads.html" style="color: white;">Name Change Ad</a></li>
                <li><a href="https://riyoadvertising.com/property-ads.html" style="color: white;">Property Ad</a></li>
                <li><a href="https://riyoadvertising.com/rememberence-ads.html" style="color: white;">Remembrance</a></li>
                <li><a href="https://riyoadvertising.com/e_auction_sale.html" style="color: white;">E Auction Sale</a></li>
                <li><a href="https://riyoadvertising.com/business_proposal.html" style="color: white;">Business Proposal</a></li>
                <li><a href="https://riyoadvertising.com/digital-press-release.html" style="color: white;">Digital Press Release</a></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="bullet6">
                <li><a href="https://riyoadvertising.com/educational-ads.html" style="color: white;">Education Ad</a></li>
                <li><a href="https://riyoadvertising.com/obituary-ads.html" style="color: white;">Obituary Ad</a></li>
                <li><a href="https://riyoadvertising.com/lostnfound-ads.html" style="color: white;">Lost & Found Ad</a></li>
                <li><a href="https://riyoadvertising.com/public-notice-ads.html" style="color: white;">Public Notice</a></li>
                <li><a href="https://riyoadvertising.com/court_notice.html" style="color: white;">Court Notice</a></li>
                <li><a href="https://riyoadvertising.com/tender-notice-ads.html" style="color: white;">Tender Notice</a></li>
                <li><a href="https://riyoadvertising.com/legal_notice.html" style="color: white;">Legal Notice</a></li>
                <li><a href="https://riyoadvertising.com/thanks-giving.html" style="color: white;">Thanks Giving</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Footer Box 3 -->
        <div class="col-lg-4 col-md-3 col-sm-3 footer-box-3">
          <img src="https://riyoadvertising.in/images/newspaper/newspaper-Ad-image-4.webp" alt="Footer Image" />
        </div>
      </div>
      <p class="copyright" style="color: white;">
        &#169; 2025 <a href="https://riyoadvertising.com/index.html" style="color: white;">riyoadvertising.com</a>. All Rights Reserved.
      </p>
    </div>
  </div>

  <!-- JavaScript -->
  <!-- Bootstrap Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script>
    function redirectToNewspapersPage() {
      var city = document.getElementById("city-select").value;
      if (city) {
        var formattedCity = city.toLowerCase().replace(/\s+/g, '-');
        window.location.href = "/category/obituary/city/" + formattedCity;
      } else {
        alert("Please select a city.");
      }
    }

    function redirectToNewspapersPage1() {
      var city = document.getElementById("city-select1").value;
      if (city) {
        var formattedCity = city.toLowerCase().replace(/\s+/g, '-');
        window.location.href = "/category/obituary/city/" + formattedCity;
      } else {
        alert("Please select a city.");
      }
    }

    function toggleMenu() {
      var menu = document.getElementById("mobileMenu");
      if (menu.style.right === "0px") {
        menu.style.right = "-250px";
      } else {
        menu.style.right = "0px";
      }
    }

    function toggleDropdown() {
      var dropdown = document.getElementById("mobileDropdownMenu");
      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }
  </script>
</body>

</html>





