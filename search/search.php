<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <script src="./main.js"></script>
    <title>Search</title>
</head>

<body>
    <?php require '../common/header.php' ?>
    <div class="body">
        <div class="container">
            <div class="sideTag">
                <h2 class="sideTagTitle">Search filter results</h2>
                <ul class="listType">
                    <li id="filTypeAll" class="filterType active">All</li>
                    <li id="filPost" class="filterType">Post</li>
                    <li id="filComment" class="filterType">Comment</li>
                    <li id="filUser" class="filterType">User</li>
                </ul>
                <ul class="listTag">
                    <li id="filTagAll" class="filterTag active">All</li>
                    <li id="filSocial" class="filterTag">#Social</li>
                    <li id="filNews" class="filterTag">#News</li>
                    <li id="filArt" class="filterTag">#Art</li>
                    <li id="filTech" class="filterTag">#Tech</li>
                    <li id="filScience" class="filterTag">#Science</li>
                    <li id="filBiology" class="filterTag">#Biology</li>
                    <li id="filMechanic" class="filterTag">#Mechanic</li>
                </ul>
            </div>
            <div class="searchContainer">
                <div class="searchBar">
                    <div class="searchBarForm">
                        <input class="searchBarInput" type="text">
                        <span class="icon icon-search searchBarIcon"></span>
                    </div>
                </div>
                <div class="mainResult">
                    <div class="resultHeader">
                        <ul class="resultSort">
                            <li id="sortRelevant" class="sort active">Most Relevant</li>
                            <li id="sortNew" class="sort">Newest</li>
                            <li id="sortName" class="sort">A - Z</li>
                            <li id="sortView" class="sort">View</li>
                        </ul>
                    </div>
                    <div class="searchResult">

                        <!-- <div class="resultCard">
                            <div class="resultType typePost">Post</div>
                            <div class="marker"></div>
                            <div class="resultCardInfo">
                                <div class="authorImgWrapper">
                                    <img class="authorImg" src="../assets/img/icon1.png" alt="">
                                </div>
                                <div class="authorInfoWrapper">
                                    <div class="authorName">
                                        <a href="#">ethank99</a>
                                    </div>
                                    <div class="authorCreated">2020</div>
                                </div>
                            </div>
                            <div class="resultCardDetails">
                                <div class="resultCardTitle">
                                    <a class="resultCardTitleLink" href="#">MongoDB Architecture</a>
                                </div>
                                <ul class="resultCardTags">
                                    <li class="cardTag"><a href="#">Tech</a></li>
                                    <li class="cardTag"><a href="#">Social</a></li>
                                    <li class="cardTag"><a href="#">News</a></li>
                                </ul>
                                <div class="resultCardDes">MongoDB is a source-available cross-platform document-oriented database program</div>
                                <div class="resultCardView">View: 3152</div>
                            </div>
                        </div>
                        
                        <div class="resultCard">
                            <div class="resultType typeComment">Comment</div>
                            <div class="marker"></div>
                            <div class="resultCardInfo">
                                <div class="authorImgWrapper">
                                    <img class="authorImg" src="../assets/img/icon1.png" alt="">
                                </div>
                                <div class="authorInfoWrapper">
                                    <div class="authorName">
                                        <a href="#">depzai13</a>
                                    </div>
                                    <div class="authorCreated">2019</div>
                                </div>
                            </div>
                            <div class="resultCardDetails">
                                <div class="resultCardTitle">
                                    <a class="resultCardTitleLink" href="#">PhP Introduction</a>
                                </div>
                                <ul class="resultCardTags">
                                    <li class="cardTag"><a href="#">Tech</a></li>
                                </ul>
                                <div class="resultCardDes">I have never learnt it</div>
                            </div>
                        </div>
                        
                        <div class="resultCard">
                            <div class="resultType typeUser">User</div>
                            <div class="marker"></div>
                            <div class="resultCardInfo">
                                <div class="authorImgWrapper">
                                    <img class="authorImg" src="../assets/img/icon1.png" alt="">
                                </div>
                                <div class="authorInfoWrapper">
                                    <div class="authorName">
                                        <a href="#">son124</a>
                                    </div>
                                </div>
                            </div>
                            <div class="resultCardDetails">
                                <div class="resultCardTitle">
                                    <a class="resultCardTitleLink" href="#">Son Of Code</a>
                                </div>
                            </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <?php require '../common/footer.php' ?>
</body>

</html>