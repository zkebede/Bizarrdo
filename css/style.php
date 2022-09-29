:root {
  --color_link_navBar: #0b4b04;
  --color_link_navBar_hover: #ffffff;
  --color_back_btn_in_row: #ff523b;
  --color_back_btn_in_row_hover: #563434;
  --color_link_in_row: #fff;
  --BG_header_color_1: #fff;
  --BG_header_color_2: #ffffff;
  --font_Family_All: "Recursive", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  font-family: var(--font_Family_All);
}

/* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  background: var(--BG_header_color_2);
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: var(--color_link_navBar_hover);
  border-radius: 5px;
  /* Handle on hover */
}

::-webkit-scrollbar-thumb:hover {
  background: var(--color_link_navBar);
}

a {
  text-decoration: none;
  color: var(--color_link_navBar);
}

p {
  color: var(--color_link_navBar);
}

ul {
  list-style-type: none;
}

.header {
  background: repeating-radial-gradient(var(--BG_header_color_1), var(--BG_header_color_2));
}

.header .container {
  max-width: 1300px;
  margin: auto;
  padding: 0 25px;
}

.header .container .navbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 20px;
}

.header .container .navbar nav {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: right;
}

.header .container .navbar nav ul {
  display: inline-block;
  list-style-type: none;
}

.header .container .navbar nav ul li {
  display: inline-block;
  padding-right: 20px;
}

.header .container .navbar .menu-icon {
  width: 28px;
  margin-left: 20px;
  display: none;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.header .container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: 5px;
}

.header .container .row .col-2 {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  min-width: 300px;
}

.header .container .row .col-2 img {
  max-width: 100%;
  padding: 40px 0;
}

.header .container .row .col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
  padding-right: 40px;
}

.header .container .row .col-2 .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
}

.header .container .row .col-2 .btn:hover, .header .container .row .col-2 .btn:focus {
  background: var(--color_back_btn_in_row_hover);
  outline-style: none;
}

.categories {
  margin: 50px 0px;
}

.categories .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.categories .small-container .title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: var(--color_link_navBar);
}

.categories .small-container .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 70px;
  height: 5px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.categories .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.categories .small-container .row .col-3 {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
  min-width: 250px;
  margin-bottom: 30px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
}

.categories .small-container .row .col-3:nth-child(1) {
  -webkit-clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
          clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
}

.categories .small-container .row .col-3:nth-child(1):hover {
  -webkit-transform: translatex(-10px);
          transform: translatex(-10px);
}

.categories .small-container .row .col-3:nth-child(2) {
  -webkit-clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
          clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
}

.categories .small-container .row .col-3:nth-child(2):hover {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.categories .small-container .row .col-3:nth-child(3) {
  -webkit-clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
          clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
}

.categories .small-container .row .col-3:nth-child(3):hover {
  -webkit-transform: translateX(10px);
          transform: translateX(10px);
}

.categories .small-container .row .col-3 img {
  width: 100%;
}

.products {
  margin: 50px 0px;
}

.products .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.products .small-container .title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: var(--color_link_navBar);
}

.products .small-container .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 90px;
  height: 5px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.products .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.products .small-container .row .col-4 {
  text-align: center;
  -ms-flex-preferred-size: 25%;
      flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
}

.products .small-container .row .col-4:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.products .small-container .row .col-4 img {
  width: 100%;
  -webkit-clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
          clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
}

.products .small-container .row .col-4 h4 {
  color: var(--color_link_navBar);
  font-weight: normal;
}

.products .small-container .row .col-4 p {
  margin-top: 8px;
  font-size: 14px;
}

.products .small-container .row .col-4 p del {
  font-size: 13px;
}

.products .small-container .row .col-4 p strong {
  font-size: 14px;
  padding: 5px;
  margin-left: 5px;
  border-radius: 3px;
  color: white;
  background: var(--color_back_btn_in_row);
}

.products .small-container .row .col-4 .rating .fa {
  color: var(--color_back_btn_in_row);
}

.offer {
  margin-top: 90px;
  background: repeating-radial-gradient(var(--BG_header_color_1), var(--BG_header_color_2));
  padding: 30px 0;
}

.offer .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.offer .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.offer .small-container .row .col-2 {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  padding: 10px;
  min-width: 200px;
  margin-top: 15px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
}

.offer .small-container .row .col-2 .offer-img {
  padding: 50px;
  margin-top: 30px;
  width: 100%;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
}

.offer .small-container .row .col-2 .offer-img:hover {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}

.offer .small-container .row .col-2 h1 {
  color: var(--color_link_navBar);
  font-weight: normal;
  margin-bottom: 15px;
}

.offer .small-container .row .col-2 p {
  margin-bottom: 15px;
  font-size: 14px;
}

.offer .small-container .row .col-2 small {
  margin-top: 15px;
  font-size: 14px;
  color: var(--color_link_navBar);
}

.offer .small-container .row .col-2 .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
}

.offer .small-container .row .col-2 .btn:hover, .offer .small-container .row .col-2 .btn:focus {
  background: var(--color_back_btn_in_row_hover);
  outline-style: none;
}

.offer .small-container .row .carsousel {
  position: relative;
  height: 600px;
  width: 80%;
  margin: 0 auto;
}

.carsousel_track-container .carsousel_track .carsousel_slide .carsousel_img{
  width: 70%;
  height: 50%;
  object-fit: cover;
}
.carsousel_track-container{
  background-color: white;
  height: 100%;
  position: relative;

}
.carsousel_track {
  padding: 0;
  margin: 0;
  list-style: none;
}
.carsousel_slide{
  position: absolute; 
  top: 0;
  bottom: 0;
  width: 0;
}
.carsousel_button{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: transparent;
  border: 0;
  cursor: pointer;
}
.carsousel_nav {
  justify-content: center;
  padding: 10px 0;
}
.carsousel_indicator {
  border: 0;
  border-radius: 50%;
  width: 15px;
  height: 15px;
  background-color: black;
}


.testimonial {
  padding-top: 100px;
}

.testimonial .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.testimonial .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.testimonial .small-container .row .col-3 {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
  padding: 40px 20px;
  min-width: 250px;
  margin-bottom: 50px;
  text-align: center;
  -webkit-box-shadow: 0 0 20px 0px #0000001a;
          box-shadow: 0 0 20px 0px #0000001a;
  -webkit-transition: ease-in-out 0.5s;
  transition: ease-in-out 0.5s;
  cursor: pointer;
}

.testimonial .small-container .row .col-3:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
  -webkit-box-shadow: 0 0 20px 0px #d147478e;
          box-shadow: 0 0 20px 0px #d147478e;
}

.testimonial .small-container .row .col-3 .fa-quote-left {
  font-size: 34px;
  color: var(--color_back_btn_in_row);
}

.testimonial .small-container .row .col-3 p {
  margin: 12px 0;
  font-size: 12px;
  color: #777;
}

.testimonial .small-container .row .col-3 img {
  margin-top: 20px;
  width: 75%;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
          clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  -webkit-transition: ease-in-out 0.5s;
  transition: ease-in-out 0.5s;
  border-radius: 50%;
}

.testimonial .small-container .row .col-3 img:hover {
  -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
          clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0);
}

.testimonial .small-container .row .col-3 h3 {
  color: var(--color_link_navBar);
  font-weight: 600;
  font-size: 16px;
  margin-top: 10px;
}

.testimonial .small-container .row .col-3 .rating .fa {
  color: var(--color_back_btn_in_row);
}

.brands {
  margin: 100px auto;
}

.brands .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.brands .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.brands .small-container .row .col-5 {
  width: 160px;
}

.brands .small-container .row .col-5 img {
  width: 100%;
  cursor: pointer;
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
  -webkit-transition: ease-in-out 0.25s;
  transition: ease-in-out 0.25s;
}

.brands .small-container .row .col-5 img:hover {
  -webkit-filter: grayscale(0%);
          filter: grayscale(0%);
}

.footer {
  background: #292929;
  color: #b9b9b9;
  font-size: 14px;
  padding: 60px 0 20px;
}

.footer .container {
  padding: 0 25px;
  margin: 0px 30px 20px;
}

.footer .container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.footer .container .row p {
  color: #b9b9b9;
}

.footer .container .row h3 {
  color: #fff;
  margin-bottom: 20px;
  border-bottom: 1px solid #fff;
  padding-bottom: 5px;
  width: 50%;
  -webkit-transform: translateX(50%);
          transform: translateX(50%);
  text-align: center;
}

.footer .container .row .app-logo {
  margin-top: 20px;
}

.footer .container .row .app-logo img {
  width: 140px;
}

.footer .container .row .footer-col-1,
.footer .container .row .footer-col-2,
.footer .container .row .footer-col-3,
.footer .container .row .footer-col-4 {
  min-width: 250px;
  margin-bottom: 20px;
}

.footer .container .row .footer-col-1 {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}

.footer .container .row .footer-col-1 h3 {
  color: #fff;
  margin-bottom: 20px;
  border-bottom: 1px solid #fff;
  padding-bottom: 5px;
  width: 50%;
  -webkit-transform: translateX(15%);
          transform: translateX(15%);
  text-align: center;
}

.footer .container .row .footer-col-2 {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: center;
}

.footer .container .row .footer-col-2 img {
  width: 180px;
  margin-bottom: 20px;
}

.footer .container .row .footer-col-3,
.footer .container .row .footer-col-4 {
  -ms-flex-preferred-size: 12%;
      flex-basis: 12%;
  text-align: center;
}

.footer .container .row .footer-col-3 ul li,
.footer .container .row .footer-col-4 ul li {
  padding: 5px;
}

.footer .container hr {
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}

.footer .container .copyright {
  text-align: center;
  color: #b5b5b596;
}

.header_product .container {
  max-width: 1300px;
  margin: auto;
  padding: 0 25px;
}

.header_product .container .navbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 20px;
}

.header_product .container .navbar nav {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: right;
}

.header_product .container .navbar nav ul {
  display: inline-block;
  list-style-type: none;
}

.header_product .container .navbar nav ul li {
  display: inline-block;
  padding-right: 20px;
}

.header_product .container .navbar .menu-icon {
  width: 28px;
  margin-left: 20px;
  display: none;
}

.header_product .container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: 5px;
}

.header_product .container .row .col-2 {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  min-width: 300px;
}

.header_product .container .row .col-2 img {
  max-width: 100%;
  padding: 40px 0;
}

.header_product .container .row .col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
}

.header_product .container .row .col-2 .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
}

.header_product .container .row .col-2 .btn:hover, .header_product .container .row .col-2 .btn:focus {
  background: var(--color_back_btn_in_row_hover);
  outline-style: none;
}

.products_page {
  margin: 20px 0px;
}

.products_page .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.products_page .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 5px auto;
}

.products_page .small-container .row .title {
  position: relative;
  line-height: 40px;
  color: var(--color_link_navBar);
  cursor: pointer;
  overflow: hidden;
}

.products_page .small-container .row .title:hover::after {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.products_page .small-container .row .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 100%;
}

.products_page .small-container .row .col-4 {
  -ms-flex-preferred-size: 25%;
      flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
  text-align: center;
}

.products_page .small-container .row .col-4:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.products_page .small-container .row .col-4 img {
  width: 100%;
  -webkit-clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
          clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
}

.products_page .small-container .row .col-4 h4 {
  color: var(--color_link_navBar);
  font-weight: normal;
}

.products_page .small-container .row .col-4 p {
  margin-top: 8px;
  font-size: 14px;
}

.products_page .small-container .row .col-4 p del {
  font-size: 13px;
}

.products_page .small-container .row .col-4 p strong {
  font-size: 14px;
  padding: 5px;
  margin-left: 5px;
  border-radius: 3px;
  color: white;
  background: var(--color_back_btn_in_row);
}

.products_page .small-container .row .col-4 .rating .fa {
  color: var(--color_back_btn_in_row);
}

.products_page .small-container .row select {
  margin: 0px 20px;
  border: 1px solid var(--color_back_btn_in_row);
  padding: 5px 20px;
  border-radius: 30px;
  width: 220px;
}

.products_page .small-container .row select:focus {
  outline: none;
}

.products_page .small-container .page-btn {
  margin: 0 auto 80px;
  text-align: center;
}

.products_page .small-container .page-btn span {
  display: inline-block;
  border: 1.5px solid var(--color_back_btn_in_row);
  border-radius: 50%;
  margin-left: 10px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  cursor: pointer;
  -webkit-transition: all 0.25s;
  transition: all 0.25s;
}

.products_page .small-container .page-btn span:hover {
  background: var(--color_back_btn_in_row);
  color: white;
}

.one_Products_Page {
  margin: 20px 0px;
}

.one_Products_Page .small-container {
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.one_Products_Page .small-container .title2 {
  margin-bottom: 5px;
  position: relative;
  line-height: 40px;
  color: var(--color_link_navBar);
  cursor: pointer;
  overflow: hidden;
}

.one_Products_Page .small-container .title2:hover::after {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.one_Products_Page .small-container .title2:hover::before {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0%;
}

.one_Products_Page .small-container .title2::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0px;
  left: 100%;
}

.one_Products_Page .small-container .title2::before {
  content: "";
  background: var(--BG_header_color_2);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0px;
  left: 0%;
}

.one_Products_Page .small-container .title2 h2 {
  padding-left: 10px;
  padding-right: 10px;
}

.one_Products_Page .small-container .title2 p {
  padding-left: 10px;
  padding-right: 10px;
}

.one_Products_Page .small-container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 20px auto;
}

.one_Products_Page .small-container .row .title {
  position: relative;
  line-height: 40px;
  color: var(--color_link_navBar);
  cursor: pointer;
  overflow: hidden;
}

.one_Products_Page .small-container .row .title:hover::after {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.one_Products_Page .small-container .row .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 100%;
}

.one_Products_Page .small-container .row .col-4 {
  -ms-flex-preferred-size: 25%;
      flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
  text-align: center;
}

.one_Products_Page .small-container .row .col-4:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.one_Products_Page .small-container .row .col-4 img {
  width: 100%;
  -webkit-clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
          clip-path: polygon(50% 0%, 100% 13%, 87% 100%, 11% 100%, 0 13%);
}

.one_Products_Page .small-container .row .col-4 h4 {
  color: var(--color_link_navBar);
  font-weight: normal;
}

.one_Products_Page .small-container .row .col-4 p {
  margin-top: 8px;
  font-size: 14px;
}

.one_Products_Page .small-container .row .col-4 p del {
  font-size: 13px;
}

.one_Products_Page .small-container .row .col-4 p strong {
  font-size: 14px;
  padding: 5px;
  margin-left: 5px;
  border-radius: 3px;
  color: white;
  background: var(--color_back_btn_in_row);
}

.one_Products_Page .small-container .row .col-4 .rating .fa {
  color: var(--color_back_btn_in_row);
}

.one_Products_Page .small-container .row .col-2 {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  padding: 20px;
  min-width: 200px;
  margin-top: 15px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
}

.one_Products_Page .small-container .row .col-2 .offer-img {
  padding: 0px;
  width: 100%;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
  -webkit-clip-path: polygon(0 7%, 15% 15%, 6% 0, 96% 0, 85% 15%, 100% 8%, 100% 93%, 85% 85%, 94% 100%, 7% 100%, 15% 85%, 0 93%);
          clip-path: polygon(0 7%, 15% 15%, 6% 0, 96% 0, 85% 15%, 100% 8%, 100% 93%, 85% 85%, 94% 100%, 7% 100%, 15% 85%, 0 93%);
}

.one_Products_Page .small-container .row .col-2 .small-img-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.one_Products_Page .small-container .row .col-2 .small-img-row .small-img-col {
  -ms-flex-preferred-size: 24%;
      flex-basis: 24%;
  cursor: pointer;
}

.one_Products_Page .small-container .row .col-2 .small-img-row .small-img-col:nth-child(1) {
  -webkit-clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
          clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%);
}

.one_Products_Page .small-container .row .col-2 .small-img-row .small-img-col:nth-child(2) {
  -webkit-clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);
          clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%);
}

.one_Products_Page .small-container .row .col-2 .small-img-row .small-img-col:nth-child(3) {
  -webkit-clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
          clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
}

.one_Products_Page .small-container .row .col-2 .small-img-row .small-img-col:nth-child(4) {
  -webkit-clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
          clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
}

.one_Products_Page .small-container .row .col-2 h4 {
  color: var(--color_link_navBar);
  font-weight: bold;
  margin: 20px 0;
}

.one_Products_Page .small-container .row .col-2 .link_page {
  margin: 0px 0 20px 0;
}

.one_Products_Page .small-container .row .col-2 p {
  font-size: 14px;
}

.one_Products_Page .small-container .row .col-2 p del {
  font-size: 13px;
}

.one_Products_Page .small-container .row .col-2 p strong {
  font-size: 14px;
  padding: 5px;
  margin-left: 5px;
  border-radius: 3px;
  color: white;
  background: var(--color_back_btn_in_row);
}

.one_Products_Page .small-container .row .col-2 .rating {
  margin-bottom: 10px;
}

.one_Products_Page .small-container .row .col-2 .rating .fa {
  color: var(--color_back_btn_in_row);
}

.one_Products_Page .small-container .row .col-2 .indent-h3 {
  margin-bottom: 20px;
}

.one_Products_Page .small-container .row .col-2 .indent-h3 .fa {
  color: var(--color_back_btn_in_row);
}

.one_Products_Page .small-container .row .col-2 select {
  display: block;
  margin: 25px 5px;
  border: 1px solid var(--color_back_btn_in_row);
  padding: 10px 20px;
  border-radius: 30px;
  width: 100%;
  font-size: 16px;
  font-weight: bold;
}

.one_Products_Page .small-container .row .col-2 select:focus {
  outline: none;
}

.one_Products_Page .small-container .row .col-2 input[type=number] {
  width: 60px;
  height: 40px;
  margin-right: 15px;
  border: 1px solid var(--color_back_btn_in_row);
  padding: 0px 10px;
  font-size: 16px;
  font-weight: bold;
  border-radius: 3px;
  text-align: center;
}

.one_Products_Page .small-container .row .col-2 input[type=number]:focus {
  outline: none;
}

.one_Products_Page .small-container .row .col-2 input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.one_Products_Page .small-container .row .col-2 .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
}

.one_Products_Page .small-container .row .col-2 .btn:hover, .one_Products_Page .small-container .row .col-2 .btn:focus {
  background: var(--color_back_btn_in_row_hover);
  outline-style: none;
}

.page-not-found .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 20px auto;
}

.page-not-found .row .col-2 {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
  padding: 20px;
  min-width: 200px;
  margin-top: 15px;
  margin-bottom: 50px;
  -webkit-transition: linear 0.25s;
  transition: linear 0.25s;
  text-align: center;
}

.page-not-found .row .col-2 .offer-img {
  padding: 0px;
  width: 100%;
}

.page-not-found .row .col-2 .title {
  position: relative;
  line-height: 40px;
  color: var(--color_link_navBar);
  cursor: pointer;
  overflow: hidden;
}

.page-not-found .row .col-2 .title:hover {
  color: var(--color_back_btn_in_row);
}

.page-not-found .row .col-2 .title:hover::after {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.page-not-found .row .col-2 .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 100%;
}

.page-not-found .row .col-2 h1 {
  color: var(--color_link_navBar);
  font-weight: bold;
  margin: 20px 0;
}

.page-not-found .row .col-2 h1 a {
  color: #838383;
}

.cart {
  margin: 50px auto;
}

.cart .small-container {
  overflow-x: hidden;
  max-width: 1080px;
  margin: auto;
  padding: 0px 25px;
}

.cart .small-container .title {
  position: relative;
  line-height: 40px;
  color: var(--color_link_navBar);
  cursor: pointer;
  overflow: hidden;
  width: 150px;
  text-align: center;
  margin-bottom: 25px;
}

.cart .small-container .title:hover::after {
  -webkit-transition: linear 0.3s;
  transition: linear 0.3s;
  content: "";
  background: var(--color_back_btn_in_row);
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.cart .small-container .title::after {
  content: "";
  background: var(--color_back_btn_in_row);
  width: 100%;
  height: 4px;
  border-radius: 10px;
  position: absolute;
  bottom: 0;
  left: 100%;
}

.cart .small-container table {
  width: 100%;
  border-collapse: collapse;
  overflow: hidden;
}

.cart .small-container table th {
  text-align: left;
  padding: 5px;
  color: #fff;
  background: var(--color_back_btn_in_row);
  font-weight: normal;
}

.cart .small-container table th:last-child {
  text-align: right;
}

.cart .small-container table td {
  padding: 10px 5px;
}

.cart .small-container table td input[type=number] {
  width: 60px;
  height: 40px;
  margin-right: 15px;
  border: 1px solid var(--color_back_btn_in_row);
  padding: 0px 10px;
  font-size: 16px;
  font-weight: bold;
  border-radius: 3px;
  text-align: center;
}

.cart .small-container table td input[type=number]:focus {
  outline: none;
}

.cart .small-container table td input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.cart .small-container table td .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 5px auto;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
}

.cart .small-container table td .btn:hover, .cart .small-container table td .btn:focus {
  background: var(--color_back_btn_in_row_hover);
  outline-style: none;
}

.cart .small-container table td:last-child {
  text-align: right;
}

.cart .small-container table .cart-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.cart .small-container table .cart-info a {
  color: var(--color_back_btn_in_row);
  -webkit-transition: ease-in-out 0.25s;
  transition: ease-in-out 0.25s;
  font-size: 12px;
}

.cart .small-container table .cart-info a:hover {
  color: #e26b47;
}

.cart .small-container table .cart-info img {
  width: 80px;
  height: 80px;
  margin-right: 10px;
  border-radius: 5px;
}

.cart .small-container .total-price {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

.cart .small-container .total-price table {
  border-top: 3px solid var(--color_back_btn_in_row);
  width: 100%;
  max-width: 400px;
}

.account-page {
  padding: 50px 0;
  background: repeating-radial-gradient(var(--BG_header_color_1), var(--BG_header_color_2));
}

.account-page .container {
  max-width: 1300px;
  margin: auto;
  padding: 0 25px;
}

.account-page .container .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: 5px;
}

.account-page .container .row .col-2 {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  min-width: 300px;
}

.account-page .container .row .col-2 img {
  max-width: 100%;
  padding: 40px 0;
}

.account-page .container .row .col-2 .form-container {
  background: #fff;
  width: 300px;
  height: 400px;
  position: relative;
  text-align: center;
  padding: 20px 0;
  margin: auto;
  -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.25s;
  transition: all 0.25s;
  border-radius: 5px;
  overflow: hidden;
}

.account-page .container .row .col-2 .form-container:hover {
  -webkit-transform: scale(1.03);
          transform: scale(1.03);
  -webkit-box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.1);
}

.account-page .container .row .col-2 .form-container .form-btn {
  display: inline-block;
}

.account-page .container .row .col-2 .form-container .form-btn span {
  font-weight: bold;
  padding: 0 10px;
  color: var(--color_link_navBar);
  cursor: pointer;
  width: 100px;
  display: inline-block;
}

.account-page .container .row .col-2 .form-container form {
  max-width: 300px;
  padding: 0 20px;
  position: absolute;
  top: 130px;
}

.account-page .container .row .col-2 .form-container form input {
  width: 100%;
  height: 30px;
  margin: 10px 0;
  padding: 0 10px;
  border: 1px solid #cccccc;
  border-radius: 30px;
  outline-style: none;
}

.account-page .container .row .col-2 .form-container form input:hover, .account-page .container .row .col-2 .form-container form input:focus {
  outline-style: none;
}

.account-page .container .row .col-2 .form-container form .btn {
  display: inline-block;
  background: var(--color_back_btn_in_row);
  color: var(--color_link_in_row);
  padding: 8px 30px;
  margin: 10px 0;
  border-radius: 30px;
  -webkit-transition: linear 0.4s;
  transition: linear 0.4s;
  border: none;
  width: 100%;
}

.account-page .container .row .col-2 .form-container form .btn:hover, .account-page .container .row .col-2 .form-container form .btn:focus {
  outline-style: none;
  background: var(--color_back_btn_in_row_hover);
}

.account-page .container .row .col-2 .form-container form a {
  font-size: 12px;
}

.account-page .container .row .col-2 .form-container #LoginForm {
  left: -300px;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.account-page .container .row .col-2 .form-container #RegisterForm {
  left: 0;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.account-page .container .row .col-2 .form-container #Indicator {
  width: 100px;
  border: none;
  background: var(--color_back_btn_in_row);
  height: 3px;
  margin-top: 8px;
  -webkit-transform: translateX(100px);
          transform: translateX(100px);
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

@media only screen and (max-width: 800px) {
  .header .container .navbar nav ul {
    position: absolute;
    top: 70px;
    left: 0;
    background: #333;
    width: 100%;
    height: 55vh;
    overflow: hidden;
    -webkit-transition: linear 0.25s;
    transition: linear 0.25s;
  }
  .header .container .navbar nav ul li {
    display: block;
    text-align: center;
    margin: 50px auto;
  }
  .header .container .navbar nav ul li a {
    color: #fff;
  }
  .header .container .navbar .menu-icon {
    display: block;
    cursor: pointer;
  }
  .header_product .container .navbar nav ul {
    position: absolute;
    top: 70px;
    left: 0px;
    background: #333;
    width: 100%;
    height: 55vh;
    overflow: hidden;
    -webkit-transition: linear 0.25s;
    transition: linear 0.25s;
    z-index: 999;
  }
  .header_product .container .navbar nav ul li {
    display: block;
    text-align: center;
    margin: 50px auto;
  }
  .header_product .container .navbar nav ul li a {
    color: #fff;
  }
  .header_product .container .navbar .menu-icon {
    display: block;
    cursor: pointer;
  }
  .account-page .container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .account-page .container .row .col-2 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .account-page .container .row .col-2 img {
    display: none;
  }
}

@media only screen and (max-width: 600px) {
  .header {
    background: repeating-radial-gradient(var(--BG_header_color_1), var(--BG_header_color_2));
    height: auto;
  }
  .header .container .row {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .header .container .row .col-2 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    text-align: center;
  }
  .header .container .row .col-2 img {
    max-width: 100%;
    padding: 40px 0;
  }
  .header .container .row .col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 20px 0;
  }
  .categories {
    margin: 50px 0px;
  }
  .categories .small-container .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }
  .categories .small-container .row .col-3 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .categories .small-container .row .col-3:nth-child(1) {
    -webkit-clip-path: polygon(0 40%, 51% 0, 100% 39%, 100% 100%, 49% 67%, 0 100%);
            clip-path: polygon(0 40%, 51% 0, 100% 39%, 100% 100%, 49% 67%, 0 100%);
  }
  .categories .small-container .row .col-3:nth-child(1):hover {
    -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
  }
  .categories .small-container .row .col-3:nth-child(2) {
    -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  }
  .categories .small-container .row .col-3:nth-child(2):hover {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  .categories .small-container .row .col-3:nth-child(3) {
    -webkit-clip-path: polygon(0 66%, 49% 100%, 100% 63%, 100% 0, 50% 39%, 0 0);
            clip-path: polygon(0 66%, 49% 100%, 100% 63%, 100% 0, 50% 39%, 0 0);
  }
  .categories .small-container .row .col-3:nth-child(3):hover {
    -webkit-transform: translateY(5px);
            transform: translateY(5px);
  }
  .products .small-container .row {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .products .small-container .row .col-4 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    text-align: center;
  }
  .products .small-container .row .col-4 h4 {
    color: var(--color_link_navBar);
    font-weight: normal;
    font-size: 20px;
    margin-top: 10px;
  }
  .products .small-container .row .col-4 img {
    width: 75%;
  }
  .products .small-container .row .col-4 p {
    margin-top: 10px;
    font-size: 16px;
  }
  .products .small-container .row .col-4 p del {
    font-size: 15px;
  }
  .products .small-container .row .col-4 p strong {
    font-size: 17px;
  }
  .offer .small-container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .offer .small-container .row .col-2 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    text-align: center;
  }
  .offer .small-container .row .col-2 h1 {
    margin-bottom: 16px;
  }
  .offer .small-container .row .col-2 p {
    font-size: 15px;
  }
  .offer .small-container .row .col-2 small {
    font-size: 17px;
  }
  .offer .small-container .row .col-2 .offer-img {
    padding: 25px;
    margin-top: 20px;
    width: 70%;
    -webkit-transition: linear 0.25s;
    transition: linear 0.25s;
  }
  .offer .small-container .row .col-2 .offer-img:hover {
    -webkit-transform: scale(1.05);
            transform: scale(1.05);
  }
  .testimonial .small-container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .testimonial .small-container .row .col-3 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .testimonial .small-container .row .col-3 p {
    font-size: 15px;
  }
  .testimonial .small-container .row .col-3 img {
    width: 50%;
  }
  .testimonial .small-container .row .col-3 h3 {
    color: var(--color_link_navBar);
    font-weight: 600;
    font-size: 16px;
    margin-top: 10px;
  }
  .testimonial .small-container .row .col-3 .rating .fa {
    color: var(--color_back_btn_in_row);
  }
  .brands .small-container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .brands .small-container .row .col-5 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    text-align: center;
  }
  .brands .small-container .row .col-5 img {
    width: 25%;
    margin: 0px auto;
  }
  .footer {
    font-size: 14px;
  }
  .footer .container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .footer .container .row p {
    color: #b9b9b9;
  }
  .footer .container .row .app-logo {
    margin-top: 20px;
    text-align: center;
  }
  .footer .container .row .app-logo img {
    width: 40%;
  }
  .footer .container .row .footer-col-1,
  .footer .container .row .footer-col-2,
  .footer .container .row .footer-col-3,
  .footer .container .row .footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
  }
  .footer .container .row .footer-col-1 h3,
  .footer .container .row .footer-col-2 h3,
  .footer .container .row .footer-col-3 h3,
  .footer .container .row .footer-col-4 h3 {
    width: 100%;
    -webkit-transform: translateX(0%);
            transform: translateX(0%);
    text-align: center;
  }
  .footer .container .row .footer-col-1 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .products_page .small-container .row {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .products_page .small-container .row .col-4 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    text-align: center;
  }
  .products_page .small-container .row .col-4 h4 {
    color: var(--color_link_navBar);
    font-weight: normal;
    font-size: 20px;
    margin-top: 10px;
  }
  .products_page .small-container .row .col-4 img {
    width: 75%;
  }
  .products_page .small-container .row .col-4 p {
    margin-top: 10px;
    font-size: 16px;
  }
  .products_page .small-container .row .col-4 p del {
    font-size: 15px;
  }
  .products_page .small-container .row .col-4 p strong {
    font-size: 17px;
  }
  .one_Products_Page .small-container {
    max-width: 1080px;
    margin: auto;
    padding: 0px 20px;
  }
  .one_Products_Page .small-container .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin: 15px auto;
  }
  .one_Products_Page .small-container .row .col-4 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .one_Products_Page .small-container .row .col-2 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .one_Products_Page .small-container .row .col-2 h4 {
    color: var(--color_link_navBar);
    font-weight: bold;
    margin: 20px 0;
  }
  .one_Products_Page .small-container .row .col-2 .link_page {
    margin: 0px 0 20px 0;
  }
  .one_Products_Page .small-container .row .col-2 h1 {
    font-size: 27px;
  }
  .one_Products_Page .small-container .row .col-2 select {
    width: 80%;
  }
  .cart .small-container table .cart-info p {
    display: none;
  }
  .account-page .container .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .account-page .container .row .col-2 {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
  .account-page .container .row .col-2 img {
    display: none;
  }
}