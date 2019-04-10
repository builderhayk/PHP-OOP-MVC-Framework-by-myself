<?php $this->start('head'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
    <div class="col-md-6 mx-auto mt-4">
        <h2 class="text-center text-primary">Register Page</h2>
        <form action="<?= PROOT ?>register/register" method="post">
            <div class="bg-primary"><?= $this->displayErrors; ?></div>
            <div class="form-group" style="position:relative;">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="<?=$this->post['fname'];?>">
            </div>
            <div class="form-group" style="position:relative;">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="<?=$this->post['lname'];?>">
            </div>
            <div class="form-group" style="position:relative;">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?=$this->post['username'];?>">
            </div>
            <div class="form-group" style="position:relative;">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?=$this->post['email'];?>">
            </div>
            <div class="form-group" style="position:relative;">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?=$this->post['password'];?>">
            </div>
            <div class="form-group" style="position:relative;">
                <label for="confirm">Password confirm</label>
                <input type="password" class="form-control" id="confirm" name="confirm" value="<?=$this->post['confirm'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
            <div class="text-right">
                <a href="<?= PROOT ?>register/login" class="text-primary">Log In</a>
            </div>
        </form>
    </div>
<?php $this->end(); ?>