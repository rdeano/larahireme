<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/img/hireme.png')); ?>" style="width:40px;height:40px;display:inline-block;margin-top:-10px;" /> <?php echo e(config('app.name', 'HireMe')); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="app-navbar-collapse">

      <ul class="nav navbar-nav navbar-right">
        <?php if(Auth::check()): ?>
            <li><a href="<?php echo e(url('/profile')); ?>">Profile</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                          <?php echo e(csrf_field()); ?>

                      </form>
                  </li>
              </ul>


            </li>
            <!-- <li><a href="<?php echo e(url('/home')); ?>">Home</a></li> -->
        <?php else: ?>
            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
        <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
