<?php
// Newspaper list categorized by language
$newspapers = [
    'english' => [
        'Tribune', 'Telegraph', 'Hindu', 'Hindustan Times', 'Aizawl Post', 'Samay Dainik', 'Morung Express', 'Peoples Chronicle', 
        'Assam Rising', 'Millennium Post', 'Kathmandu Post', 'Himalayan Times', 'The Pioneer', 'Gomantak Times', 'Western Times', 
        'Dawnlit Post', 'Chandigarh Tribune', 'Active Times', 'News Today', 'Asian Age', 'Telangana Today', 'Echo of India', 
        'Sangai Express', 'Sikkim Express', 'Arunachal Times', 'Daily Excelsior', 'Navhind Times', 'Deccan Herald', 
        'Financial Express', 'Statesman', 'Indian Express', 'Business Line', 'O Herald O', 'Nagaland Post', 'Meghalaya Guardian', 
        'Kashmir Times', 'Deccan Chronicle', 'Assam Tribune', 'Mirror', 'Tripura Times', 'Mid Day', 'Hitavada', 'Business Standard', 
        'Mizoram Post', 'Himali Bela', 'Eastern Chronicle', 'New Indian Express', 'Shillong Times', 'North East Times', 
        'Financial Chronicle', 'Economic Times', 'Tripura Observer'
    ],
    'hindi' => [
        'Rashtradoot', 'Dainik Dabang Dunia', 'I-Next', 'Navodaya Times', 'Dainik Navajyoti', 'Janpath Samachar', 'Dainik Vishwamitra', 
        'Info India', 'Himalaya Darpan', 'Saamna Times', 'Salam Duniya', 'Samagya', 'Dainik Savera Times', 'Yuvashakti', 'Adhikar', 
        'Dainik Herald', 'Hamara Mahanagar', 'Swadesh', 'Dainik Kashmir Times', 'Sandhya Times', 'Hindustan', 'Nai Dunia', 'Punjab Kesari', 
        'Rajasthan Patrika', 'Sanmarg', 'Dainik Bhaskar', 'Amar Ujala', 'Dainik Jagran', 'Divya Himachal', 'Navbharat Times', 'Nava Bharat', 
        'Prabhat Khabar', 'Swatantra Vaartha', 'Purvanchal Prahari', 'Jansatta', 'Daily Hindi Milap', 'Yashobhumi', 'Himachal Dastak'
    ],
    'marathi' => [
        'Navprabha', 'Dainik Gomantak', 'Navarashtra', 'Mumbai Lakshadeep', 'Sandhyakal', 'Navakal', 'Prabhat', 'Navshakti', 
        'Mumbai Choufer', 'Maharashtra Times', 'Lokmat', 'Pudhari', 'Punya Nagari', 'Tarun Bharat', 'Divya Marathi', 'Sakal'
    ]
];

// Get the selected newspaper from URL (?newspaper=Hindustan Times)
$currentNewspaper = $_GET['newspaper'] ?? ''; 

// Identify the language of the selected newspaper
$language = '';
foreach ($newspapers as $lang => $list) {
    if (in_array($currentNewspaper, $list)) {
        $language = $lang;
        break;
    }
}

// Get other newspapers of the same language (excluding the current one)
$relatedNewspapers = $language ? array_diff($newspapers[$language], [$currentNewspaper]) : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($currentNewspaper); ?> - News</title>
</head>
<body>

    <h1>Welcome to <?php echo htmlspecialchars($currentNewspaper); ?></h1>

    <footer>
        <?php if ($language): ?>
            <h3>Other <?php echo ucfirst($language); ?> Newspapers</h3>
            <ul>
                <?php foreach ($relatedNewspapers as $newspaper): ?>
                    <li><a href="?newspaper=<?php echo urlencode($newspaper); ?>"><?php echo htmlspecialchars($newspaper); ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No related newspapers found.</p>
        <?php endif; ?>
    </footer>

</body>
</html>
