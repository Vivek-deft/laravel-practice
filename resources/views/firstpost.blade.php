<style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Raleway:wght@100&family=Recursive:wght@300&family=Righteous&family=Roboto:wght@100&family=Young+Serif&display=swap');
body{
    font-family: 'Great Vibes', cursive;
    font-family: 'Raleway', sans-serif;
    font-family: 'Recursive', sans-serif;
    font-family: 'Righteous', cursive;
    font-family: 'Roboto', sans-serif;
    font-family: 'Young Serif', serif;

    background: url(https://images.unsplash.com/photo-1545569341-9eb8b30979d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80) no-repeat, center center;
    background-size: fit-content;
    background-position-x: 90%;
    background-position-y:15%;
}   
h1{
    position: absolute;
    left:50px;
    top:10px;
    word-spacing: -5px;
    font-size: 60px;
    text-shadow: 1px 1px 1px lightblue;
}
nav{
    overflow: hidden;

    color:black;
}
nav ul{
    margin:0;
    padding: 0;
}
nav a{
    float: right;
    text-align: center;
    padding: 7px;
    text-decoration: none;
    color: inherit;
}
#left{
    float:left;
}
nav a:hover{
    background-color: black;
    color:lightblue;
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
#content{
    position: fixed;
    left:10px;
    top:150px;
    padding-top: 100px;
}
.fade-in {
	opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 2s;
}
.fade-in-2{
    opacity: 1;
	animation-name: fadeInOpacity;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	animation-duration: 4s;
}
.footer{
    position: fixed;
    bottom: 0;
    padding-left: 10px;
    color:white;
    font-size: 17px;
    text-shadow: 3px 3px 1px black;
}
@keyframes fadeInOpacity {
	0% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}

</style>


<body>
    <article>
        <nav>
            <ul>
                <a href="">Contacts</a>
                <a href="">Information</a>
                <a href="">Schedule</a>
                <a href="" id="left">Home</a>
            </ul>
        </nav>
        <h1 class="fade-in">Discover New Worlds</h1>
        <div id="content" class="fade-in-2">
            <ul class="sec1">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('post')}}">Tours</a></li>
                <li><a href="{{route('first')}}">About</a></li>
                <li><a href="{{route('book')}}">Book</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Kyoto Industries © <span><script>document.write(/\d{4}/.exec(Date())[0])</script>
            </span></p>
        </div>
    </article>
</body>