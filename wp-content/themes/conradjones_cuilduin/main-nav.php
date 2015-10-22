<!--  Top bar with nav -->
<nav id="menu" class="nav">
    <ul class="menu-ul">
        <?php
        // pass args into wp_nav_menu so we can control content from WP-admin
        $args = array(
            'theme_location' => 'main-menu'
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </ul>
</nav>


<!-- <head>
  <meta name="viewport" content="width=device-width">
</head>
<nav>
  <ul class="menu-ul">
    <li>
      <a href="">Home</a>
    </li>
    <li>
      <a href="">The Houses</a>
    </li>
    <li>
      <a href="">Location</a>
    </li>
    <li>
      <a href="">Amenities</a>
    </li>
    <li>
      <a href="">$CenturyGothic</a>
    </li>
    <li>
      <a href="">Site Plan</a>
    </li>
  </ul>
</nav> -->

<!--
a {
  text-decoration: none;
  color: #0000;
  display: block;
}

ul {
  list-style: none;
  position: relative;
  text-align: left;
}

li {
  float: left;
}

/* clear'n floats */
ul:after {
  clear: both;
}

ul:before,
ul:after {
    content: " ";
    display: table;
}

nav {
  position: relative;
  text-align: center;
  letter-spacing: 1px;
}

/* prime */
ul.menu-ul li a {
  display: block;
  padding: 20px 60px;
}

ul.menu-ul li:last-child a {
  border-right: none;
}

ul.menu-ul li a:hover {
  color: #000;
}
ul.menu-ul li a:after {
    content:  "\00a0\00a0\00a0\00a0\00a0\00a0\00a0\00a0\00b7";
}
ul.menu-ul li:nth-child(3) a:after,
ul.menu-ul li:nth-child(6) a:after{
    content:  "\00a0\00a0\00a0\00a0\00a0\00a0\00a0\00a0";
}

@media only screen and (max-width: 600px) {
  .decor {
    padding: 3px;
  }

  .wrap {
    width: 100%;
    margin-top: 0px;
  }

   li {
    float: none;
  }


  ul.primary li:hover ul {
    display: block;
  }
  ul.menu-ul li a:after{
    content: ""
  }
} -->
