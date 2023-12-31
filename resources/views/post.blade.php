<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.section-one {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url(https://images.unsplash.com/photo-1515612148533-6247582c12c7?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NjE4MzU4NzQ&ixlib=rb-1.2.1&q=80);
  background-size: cover;
  background-position: center;
  filter: brightness();
  height: 100vh;
  width: 100vw;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; 
}

.container {
  text-align: center;
  color: white;
}

h1 {
  text-transform: uppercase;
  letter-spacing: 5px;
  font-size: 4rem;
  font-weight: 400;
}

p {
  font-size: 1.15rem;
  letter-spacing: 3px;
  margin: 20px 0 40px;
}

.home-button {
  color: white;
  text-decoration: none;
  border: 2px white solid;
  padding: 10px 15px;
}

.home-button:hover,
.home-button:focus {
  background: hsl(0, 100%, 100%, .2);
  outline: none;
}

.section-two {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

.container-two {
  display: flex;
  padding: 50px;
  gap: 20px;
  width: 100%;
}

.content h1 {
  font-size: 2.75rem;
}

.content h1::after {
  content: '';
  display: block;
  width: 100%;
  height: 5px;
  background: #D1A370; 
}

.content p {
  font-size: 1.1rem;
  letter-spacing: 2px;
}

.content-image img {
  width: 300px;
  object-fit: scale-down;
}

@media (max-width: 700px) {
  .section-two {
    height: 100%;
  }
  .container-two {
    flex-direction: column;
    height: 100%;
  }
}

footer {
  width: 100%;
  background: #212121;
  color: white;
  padding: 25px;
  text-align: center;
}

.footer-container {
  display: flex;
  justify-content: center;
}

.footer-content {
  margin: 0 50px 0;
}

.footer-content svg {
  width: 50px;
  fill: white;
}

.footer-content h6 {
  font-size: 1.2rem;
  font-weight: lighter;
  margin-bottom: 25px;
  color: #D1A370;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.footer-content ul {
  list-style: none;
}

.footer-content ul li {
  margin: 25px 0;
}

.footer-content ul li a {
  text-decoration: none;
  color: white;
}

.footer-content ul li a:hover,
.footer-content ul li a:focus {
  color: hsl(32, 51%, 63%, 0.7);
}

@media (max-width: 600px) {
  .footer-container {
    flex-direction: column;
  }
}
.fade-in {
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 2s;
}
@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
li a{
    display: block;

    text-align: center;
    text-decoration: none;
    color: inherit;

    border: solid black;

    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    margin-top: 50px;
    margin-bottom: -20px;

    box-shadow: 1px 1px 1px black;
}
li a:hover{
    background-color: black;
    color:pink;
    box-shadow: 2px 2px 1px #8d8d8d;
}

</style>

<body>
    <div id="content" class="fade-in-2" >
        <ul class="sec1">
            <li ><a href="/">Home</a></li>
            <li><a href="{{route('post')}}">Tours</a></li>
            <li><a href="{{route('first')}}">About</a></li>
            <li><a href="{{route('book')}}">Book</a></li>
        </ul>
    </div>
</br>
    <section class="section-one"> 
       <div class="container">
         <h1>Landing Page</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
         <a href="" class="home-button">Read More</a>
       </div>  
     </section> 
     
    
    <section class="section-two">
       <div class="container-two">
         <div class="container-two-content content">
           <h1>Title</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         </div>
         <div class="container-two-content content-image">
           <img src="https://images.unsplash.com/photo-1659269661337-7ee76a7645b5?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NjE4ODcwODY&ixlib=rb-1.2.1&q=80">
         </div>
       </div>
    </section>
      
      <footer>
        <div class="footer-container">
          <div class="footer-content">
            <svg viewBox="0 0 512 512" width="100" title="university">
     <path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z" />
   </svg>
          </div>  
          <div class="footer-content">
            <h6>Social</h6>
            <ul>
              <li><a href="">Facebook</a><li>
              <li><a href="">Instagram</a><li>
              <li><a href="">Twitter</a><li>
            </ul>
          </div>
          
          <div class="footer-content">
            <h6>Service</h6>
            <ul>
              <li><a href="">Compare</a><li>
              <li><a href="">Download</a><li>
              <li><a href="">Feedback</a><li>
              <li><a href="">Bug Report</a><li>
            </ul>
          </div>
          
          <div class="footer-content">
            <h6>Activity</h6>
            <ul>
              <li><a href="">Influencers</a><li>
              <li><a href="">Affiliate</a><li>
              <li><a href="">Co-Branding</a><li>
              <li><a href="">Honor</a><li>
              <li><a href="">Give Away</a><li>
            </ul>
          </div>
          
        </div>
      </footer>
   </body>