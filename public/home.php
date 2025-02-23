<?php 
    require 'includes/header.php';
?>

    <main class="main">
        <section class="info">
            <div class="info__icons">
                <div class="iten-icons">
                    <img src="./assets/img/icons/auto(1).png" alt="" class="iten-icons__icon">
                </div>
    
                <div class="iten-icons">
                    <img src="./assets/img/icons/mantenimiento.png" alt="" class="iten-icons__icon">
                </div>
    
                <div class="iten-icons">
                    <img src="./assets/img/icons/store-front.png" alt="" class="iten-icons__icon">
                </div>
            </div>
    
            <div class="info__text">
                <h2 class="text-info__titulo">Nuestro Servicio</h2>
                <p class="text-info__texto"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tenetur quae officia vel recusandae ullam assumenda ipsum, earum voluptatum, deserunt officiis eum temporibus, molestias dolores itaque ipsa mollitia harum eaque!
                Perferendis architecto ab voluptatibus sint, doloremque excepturi in atque saepe nam illo, eos a ex voluptates quaerat, repudiandae veritatis quis quia non? Fuga commodi molestias iusto soluta in quae assumenda!</p>
                <p class="text-info__texto">
                Ratione magni soluta voluptates qui, veritatis quasi vero similique facere atque doloremque corporis adipisci odio consequuntur. Reprehenderit hic laborum officiis! Officiis praesentium natus eligendi obcaecati quo assumenda ad animi eius!
                Perferendis dolores doloremque animi magnam earum? Tempora repellat adipisci et magnam minus excepturi dolorem nihil possimus amet reprehenderit quia animi dignissimos est iure, itaque, quae asperiores. Labore asperiores harum quaerat.
                Quia autem veniam quae quaerat aspernatur eaque nulla doloribus aliquid placeat eius, fuga repellat libero consequuntur nostrum ab ipsum corporis cupiditate quas, laboriosam sint culpa, dignissimos suscipit. Tempore, accusamus officia!</p>
            </div>
        </section>
    
        <section class="productos">
            <div class="content-productos">
                <h2 class="productos-titulo"><a href=""> PRODUCTOS </a></h2>
                <div class="productos">
                    
                    <div class="producto__iten">
                        <h3 class="producto-titen__titulo">Mazda 3</h3>
                        <img src="./assets/img/productos/mazda3.png" alt="" class="producto-item__imagen">
                        <p class="producto-item__texto">
                            <span class="precio">Precio: </span> $3.000.000
                        </p>
                        <p class="producto-item__texto">
                            <span class="informacion">Informacion: </span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                    <div class="producto__iten">
                        <h3 class="producto-titen__titulo">Mazda 3</h3>
                        <img src="./assets/img/productos/mazda3.png" alt="" class="producto-item__imagen">
                        <p class="producto-item__texto">
                            <span class="precio">Precio: </span> $3.000.000
                        </p>
                        <p class="producto-item__texto">
                            <span class="informacion">Informacion: </span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>

                    <div class="producto__iten">
                        <h3 class="producto-titen__titulo">Mazda 3</h3>
                        <img src="./assets/img/productos/mazda3.png" alt="" class="producto-item__imagen">
                        <p class="producto-item__texto">
                            <span class="precio">Precio: </span> $3.000.000
                        </p>
                        <p class="producto-item__texto">
                            <span class="informacion">Informacion: </span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>

                <div class="ver-productos">
                    <a href="">VER PRODUCTOS</a>
                </div>
            </div>
        </section>

        <section class="contacto">
            <h2 class="contacto-titulo">CONTACTO</h2>    
            <div class="content-contacto">
                <div class="redes">
                    <div class="redes__iten">
                        <i class="fab fa-whatsapp fa-3x fa-fw icon-redes"></i>
                        <i class="fas fa-phone fa-3x fa-fw icon-redes"></i>
                        <i class="fab fa-facebook fa-3x fa-fw icon-redes"></i>
                        <i class="fab fa-instagram fa-3x fa-fw icon-redes"></i>
                        
                    </div>
                </div>
                <div class="formulario">
                    <h3 class="mb-4">Email</h3>
                    <form class="form-contacto">
                        <input type="text" name="nombre" id="nombre" class="form-control form-contacto__control" placeholder="Nombre">
                        <input type="tel" name="telefono" id="telefono" class="form-control form-contacto__control" placeholder="Telefono">
                        <textarea name="mensaje" id="mensaje" class="form-control form-contacto__control" placeholder="Mensaje" rows="5"></textarea>

                        <div class="formulario-contacto__btn">
                            <button class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="ubicacion">
            <div class="content-ubicacion">
                <h2 class="mb-5">Ubicacion</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.039513684857!2d-75.  28717754280812!3d2.9216529400208384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b74791ea64a35%3A0x665e87c429e0a38d!2sEDS%20NEIVA%20Mobil!5e0!3m2!1ses!2sco!4v1740282250650!5m2!1ses!2sco" width="100%" height="350" style="border:0; border-radius: 1rem;" allowfullscreen="" loading="lazy";  referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>


    </main>


<?php
  require 'includes/footer.php';
?>