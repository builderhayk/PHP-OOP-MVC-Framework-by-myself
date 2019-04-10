<?php $this->start('head');?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<?php $this->end();?>
<?php $this->start('body');?>
<div class="col-md-6 mx-auto mt-4">
    <h2 class="text-center text-primary" >Login Page</h2>
    <form action="<?=PROOT?>register/login" method="post">
        <div class="bg-primary"><?=$this->displayErrors;?></div>
        <div class="form-group" style="position:relative;">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" >
        </div>
        <div class="form-group" style="position:relative;">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" value="on">
            <label class="form-check-label" for="remember_me">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
        <div class="text-right">
            <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
        </div>
    </form>
</div>
<?php $this->end();?>
