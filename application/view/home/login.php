<div class="ui four column centered grid">
	<div class="column">    
	    <h1>Login</h1>
	    <form class="ui form" action="<?php echo URL;?>home/login" method="post">
	    	<div class="field">
	    		<label>Notendanafn</label>
	    		<input type="text" id="user" name="username">
	    	</div>
	    	<div class="field">
	    		<label>Lykilorð</label>
	    		<input type="password" id="user" name="">
	    	</div>
	        <button class="ui green button" type="submit">Innskráning</button>
	        <a class="ui blue button" href="<?php echo URL;?>home/signup">Ég er ekki með aðgang</a>
	    </form>
	</div>
</div>