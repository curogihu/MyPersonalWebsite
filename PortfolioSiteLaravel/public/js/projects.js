var projects =
  [
    {
      "category"          : "PHP",
      "orderId"           : 1,
      "projectTitle"      : "Programming test for applying a company",
      "usedTechnology"    : "PHP",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "This was a programming quiz for applying a company in Surrey, BC, Canada. " +
                            "I solved the quiz as a skill check, but didn't apply " +
                            "because the candidates had to be immigrant and I'm not immigrant.",
      "githubLink"        : "https://github.com/curogihu/Top3000PlayersOnScrollsGuide"
    },

    {
      "category"          : "PHP",
      "orderId"           : 2,
      "projectTitle"      : "Web scraping and posting to WordPress",
      "usedTechnology"    : "PHP, WordPress, PHP Simple HTML DOM Parser",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Web scrape a Japanese Rental properties site, which are automatically posted to Wordpress.",
      "githubLink"        : "https://github.com/curogihu/scrape_rentSite/blob/master/automaticPost.php"
    },

    {
      "category"          : "PHP",
      "orderId"           : 3,
      "projectTitle"      : "Web scraping an existed League of Legends site",
      "usedTechnology"    : "PHP, MySQL, PHP Simple HTML DOM Parser",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Web scraping a site, http://probuilds.net/ and show the edited information.",
      "githubLink"        : "https://github.com/curogihu/LoLSearchProBuildTrend"
    },

    {
      "category"          : "PHP",
      "orderId"           : 4,
      "projectTitle"      : "LoL Trend Research",
      "usedTechnology"    : "PHP, MySQL, Laravel, AngularJS, Riot API",
      "screenShotFileName": "http://yony-developer.xyz/images/loltrendreseachSiteImage.png",
      "websiteUrl"        : "http://loltrendresearch.xyz/",
      "sentence"          : "It is informative for League of Legends beginners " +
                            "to provide when and what summoner tend to buy items each champion.",
      "githubLink"        : "https://github.com/curogihu/LoLTrendResearch"
    },

    {
      "category"          : "PHP",
      "orderId"           : 5,
      "projectTitle"      : "Web scrape a site, indeed and collect information.",
      "usedTechnology"    : "PHP, MySQL, Laravel, AngularJS",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Web scrape a site, indeed and collect information.",
      "githubLink"        : "https://github.com/curogihu/SearchIndeed"
    },

    {
      "category"          : "PHP",
      "orderId"           : 6,
      "projectTitle"      : "My portfolio site",
      "usedTechnology"    : "PHP, Laravel",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "My portfolio site. Now you watch itself.",
      "githubLink"        : "https://github.com/curogihu/MyPersonalWebsite"
    },

  /* scala projects */
    {
      "category"          : "Scala",
      "orderId"           : 101,
      "projectTitle"      : "Web scraping with Scala",
      "usedTechnology"    : "Scala",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Web scrape a Japanese Rental properties site and show the contents on the web browser.",
      "githubLink"        : "https://github.com/curogihu/WebScrapingByScala"
    },

    {
      "category"          : "Scala",
      "orderId"           : 102,
      "projectTitle"      : "Connect to DB and display randomly the game data",
      "usedTechnology"    : "Scala, MySQL",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Based on MySQL, show data randomly summoner bought all items during a match.",
      "githubLink"        : "https://github.com/curogihu/ScalaWithMySQL"
    },

  /* other projects */
    {
      "category"          : "Others",
      "orderId"           : 201,
      "projectTitle"      : "Sort words in a file",
      "usedTechnology"    : "C",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Sort words in descending order of appearence count which are stated in an input file.",
      "githubLink"        : "https://github.com/curogihu/School_homework/blob/master/classProject/mainFunction3.c"
    },

    {
      "category"          : "Others",
      "orderId"           : 202,
      "projectTitle"      : "Investigate words in input file and output a result file",
      "usedTechnology"    : "C++",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Investigate each alphabet in words, then output a file which contains each alphabet appearence per word.",
      "githubLink"        : "https://github.com/curogihu/School_homework/blob/master/classProject/SearchAppearance.cpp"
    },

    {
      "category"          : "Others",
      "orderId"           : 203,
      "projectTitle"      : "Airline Reservation System",
      "usedTechnology"    : "C#",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "I remembered that it was hard for novice developers " +
                            "because a part was beyond the course contents.",
      "githubLink"        : "https://github.com/curogihu/AirlineReservationSystem"
    },

    {
      "category"          : "Others",
      "orderId"           : 204,
      "projectTitle"      : "Create a maze game with character like Pacman",
      "usedTechnology"    : "Visual Basic",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "Create a maze game. The goal is heading from the higher left corner to the lower right corner.",
      "githubLink"        : "https://github.com/curogihu/ModifiedMazeGame"
    },

    {
      "category"          : "Others",
      "orderId"           : 205,
      "projectTitle"      : "Scrape Japanese local government urls from a site",
      "usedTechnology"    : "Visual Basic Application",
      "screenShotFileName": "",
      "websiteUrl"        : "",
      "sentence"          : "The project doesn't work because the target site was disappeared.",
      "githubLink"        : "https://github.com/curogihu/ScrapingHTMLByVBA"
    },
  ];

/*
function getCategoryFromUrl(url){
  //var url = window.location.href;

  if (url.match(/php/)) {
    return "php";

    var tmpArr = projects.filter(function(item, index){
      if(item.category == "php"){
        return true;

      }else{
        return false;
      }

    });

  }else if (url.match(/scala/)) {
    return "scala";

    var tmpArr = projects.filter(function(item, index){
      if(item.category == "scala"){
        return true;

      }else{
        return false;
      }

    });

  }else{
    return "others";

    var tmpArr = projects.filter(function(item, index){
      if(item.category == "others"){
        return true;

      }else{
        return false;
      }

    });
  }
}
*/