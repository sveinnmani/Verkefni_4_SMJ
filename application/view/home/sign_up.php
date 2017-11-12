<div class="ui four column centered grid">
    <div class="column">
        <h1>Sign up</h1>
        <form class="ui form" action="<?php echo URL;?>Home/signup" method="post">
            <div class="field">
                <label>Fullt nafn</label>
                <input type="text" name="name">
            </div>
            <div class="field">
                <label>Notendanafn</label>
                <input type="text" name="username">
            </div>
            <div class="field">
                <label>Lykilorð</label>
                <input type="password" name="password">
            </div>
            <div class="field">
                <label>Staðfesta lykilorð</label>
                <input type="password" name="confpass">
            </div>
            <button class="ui green button" type="submit">Innskráning</button>
            <!--<button class="ui blue button" type="submit">Innskráning</button>-->  
            <a class="ui blue button" href="<?php echo URL;?>Home/login">Ég er með aðgang</a>
        </form>
    </div>
</div>
