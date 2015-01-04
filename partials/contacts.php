<div class="container content contacts" id="contacts">
    <div class="row">
        <div class="col-md-9">
            <form role="form" id="contact_form" action="/sendEmail.php" method="POST">
                <div class="form-group">
                    <label for="InputName">Seu nome</label>
                    <input type="text" class="form-control" id="InputName" name="nome" placeholder="Seu nome">
                </div>
                <div class="form-group">
                    <label for="InputEmail">Seu email</label>
                    <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="InputMesaagel">Sua mensagem</label>
                    <textarea class="form-control" id="Message" name="message" placeholder="Sua mensagem" rows="8"></textarea>
                </div>
                <button type="submit" class="btn btn-default btn-green">Enviar</button>
            </form>
        </div>
        <div class="col-md-3">
            <ul class="contact-info">
                <li class="telephone">
                    (19) 99196-3638
                </li>
                <li class="address">
                    Campinas, São Paulo
                </li>
                <li class="mail">
                    camila_a_dias@hotmail.com
                </li>
            </ul>
        </div>
    </div>
</div>