<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>BuyTrends | Fashion & Style</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:#f8f8f8;
color:#222;
}

/* HEADER */

header{
background:white;
box-shadow:0 2px 10px rgba(0,0,0,0.05);
position:sticky;
top:0;
z-index:100;
}

.nav{
max-width:1200px;
margin:auto;
display:flex;
justify-content:space-between;
align-items:center;
padding:20px;
}

.logo{
font-size:26px;
font-weight:bold;
color:#000;
}

nav a{
margin-left:25px;
text-decoration:none;
color:#444;
font-weight:500;
transition:.3s;
}

nav a:hover{
color:#ff3c78;
}

/* HERO */

.hero{
height:80vh;
background:url("https://images.unsplash.com/photo-1520975922284-7b33f0a7a7b1") center/cover;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:white;
}

.hero-content{
background:rgba(0,0,0,0.45);
padding:40px;
border-radius:10px;
}

.hero h1{
font-size:48px;
margin-bottom:15px;
}

.hero p{
font-size:18px;
margin-bottom:20px;
}

.hero button{
padding:14px 30px;
border:none;
background:#ff3c78;
color:white;
font-size:16px;
cursor:pointer;
border-radius:30px;
transition:.3s;
}

.hero button:hover{
background:#e82e67;
transform:scale(1.05);
}

/* SECTION */

section{
padding:80px 20px;
}

.container{
max-width:1200px;
margin:auto;
}

.section-title{
text-align:center;
font-size:32px;
margin-bottom:50px;
}

/* CATEGORIES */

.categories{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

.category{
position:relative;
overflow:hidden;
border-radius:10px;
}

.category img{
width:100%;
height:300px;
object-fit:cover;
transition:.4s;
}

.category:hover img{
transform:scale(1.1);
}

.category h3{
position:absolute;
bottom:20px;
left:20px;
color:white;
font-size:24px;
}

/* PRODUCTS */

.products{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
gap:25px;
}

.product{
background:white;
border-radius:10px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,0.05);
transition:.3s;
}

.product:hover{
transform:translateY(-8px);
}

.product img{
width:100%;
height:260px;
object-fit:cover;
}

.product-info{
padding:15px;
}

.product-info h4{
margin-bottom:8px;
}

.price{
color:#ff3c78;
font-weight:bold;
}

/* NEWSLETTER */

.newsletter{
background:#111;
color:white;
text-align:center;
padding:70px 20px;
}

.newsletter input{
padding:12px;
width:280px;
border:none;
border-radius:5px;
margin-right:10px;
}

.newsletter button{
padding:12px 25px;
border:none;
background:#ff3c78;
color:white;
border-radius:5px;
cursor:pointer;
}

/* FOOTER */

footer{
background:#000;
color:#bbb;
padding:40px 20px;
text-align:center;
}

footer a{
color:#ff3c78;
text-decoration:none;
margin:0 10px;
}

/* MOBILE */

@media(max-width:768px){

.hero h1{
font-size:34px;
}

nav{
display:none;
}

}

</style>
</head>

<body>

<header>

<div class="nav">

<div class="logo">BuyTrends</div>

<nav>
<a href="#">Home</a>
<a href="#">Men</a>
<a href="#">Women</a>
<a href="#">New</a>
<a href="#">Contact</a>
</nav>

</div>

</header>


<!-- HERO -->

<section class="hero">

<div class="hero-content">

<h1>Discover Your Style</h1>

<p>Latest fashion trends for men & women</p>

<button>Shop Now</button>

</div>

</section>


<!-- CATEGORIES -->

<section>

<div class="container">

<h2 class="section-title">Shop By Category</h2>

<div class="categories">

<div class="category">
<img src="https://images.unsplash.com/photo-1520975867597-0af37a22e31e">
<h3>Men Fashion</h3>
</div>

<div class="category">
<img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d">
<h3>Women Fashion</h3>
</div>

<div class="category">
<img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c">
<h3>Accessories</h3>
</div>

</div>

</div>

</section>


<!-- TRENDING PRODUCTS -->

<section>

<div class="container">

<h2 class="section-title">Trending Products</h2>

<div class="products">

<div class="product">
<img src="https://images.unsplash.com/photo-1520975661595-6453be3f7070">
<div class="product-info">
<h4>Classic Jacket</h4>
<p class="price">$89</p>
</div>
</div>

<div class="product">
<img src="https://images.unsplash.com/photo-1520975922284-7b33f0a7a7b1">
<div class="product-info">
<h4>Modern Hoodie</h4>
<p class="price">$59</p>
</div>
</div>

<div class="product">
<img src="https://images.unsplash.com/photo-1519741497674-611481863552">
<div class="product-info">
<h4>Elegant Dress</h4>
<p class="price">$99</p>
</div>
</div>

<div class="product">
<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b">
<div class="product-info">
<h4>Stylish Sneakers</h4>
<p class="price">$120</p>
</div>
</div>

</div>

</div>

</section>


<!-- NEWSLETTER -->

<section class="newsletter">

<h2>Join BuyTrends Community</h2>

<p>Get updates on latest fashion trends</p>

<br>

<input type="email" placeholder="Enter your email">

<button>Subscribe</button>

</section>


<footer>

<p>© 2026 BuyTrends</p>

<p>
<a href="#">Privacy Policy</a> |
<a href="#">Disclaimer</a> |
<a href="#">Contact</a>
</p>

</footer>


</body>
</html>
