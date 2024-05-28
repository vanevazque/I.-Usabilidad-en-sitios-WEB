<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
:root{
    margin: 0;
    padding: 0;

    --white: #f2f5f5;
    --black: #121212;
    --blue: #308bd1;
    --gray: #959695;
}

body{
	background-image: url(img/fondo.jpg);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-family: "Montserrat", sans-serif;
    color: var(--white);
    background-color: var(--black);
}

.error_container{
    max-width: 800px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin: 0 10px;
}

.error_code{
    width: 100%;
    margin: 0 auto;
    font-size: 6rem;
    font-weight: 800;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

p:first-of-type{
    animation: fall 1s linear;
    transform: rotateZ(-20deg);
}

P:last-of-type{
    animation: fall 1.8s linear;
    transform: rotateZ(8deg);
}

p:nth-of-type(2){
    color: var(--blue);
    animation: bounce 1.2s 1.8s linear forwards;
    opacity: 0;
}

.error_title{
    font-size: 1.5rem;
    font-weight: 700;
    pad: 0 3%;
}

.error_description{
    font-size: 0.9rem;
    text-align: justify;
    line-height: 1.6;
    padding: 0 10%;
    color: var(--gray);
}

.action{
    font: inherit;
    padding: 10px 30px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    background-color: var(--blue);
    color: var(--white);
}

.action:hover{
    opacity: 0.8;
}

@media screen and (min-width: 48rem) {
    .error_description{
        padding: 0;
    }
    
}
@keyframes fall{
    0%{
        transform: translateY(-100vh);
    }
    100%{
        transform: translateY(0);
    }
}

@keyframes bounce{
    0%,40%,75%,95%{
        transform: translateY(0);
        opacity: 1;
    }
    15%{
        transform: translateY(-25px);
    }
    65%{
        transform: translateY(-15px);
    }
    85%{
        transform: translateY(-5px);
    }
    100%{
        transform: rotateZ(45deg);
        opacity: 1;
    }
}
</style>

<div class="error_container">
        <div class="error_code">
            <p>4</p>
            <p>0</p>
            <p>4</p>
        </div>
        <divv class="error_title">Página no encontrada</divv>
        <div class="error_description">Parece que no podemos encontrar esa página. Puede que se haya eliminado.</div>
        <a href="index.php" class="action">Regresar</a>

        
    </div>

</body>
</html>