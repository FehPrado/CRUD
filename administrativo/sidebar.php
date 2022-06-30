		<!-- Sidebar -->
		<div class="sidebar">
		    <div class="sidebar-content">

		        <!-- User dropdown -->
		        <?php if($nivelTela==0){ ?>
		        <div class="user-menu dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <img src="imagens/business_man.png" width="64px" style="margin-top: 5px;">
		                <div class="user-info">
		                    <span><?php echo substr($_SESSION["username"], 0, 20)?></span>
		                    <span>ADM RightWay</span>
		                </div>
		            </a>

		        </div>
		        <?php } ?>

		        <?php if($nivelTela==1){ ?>
		        <div class="user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                <img src="../imagens/business_man.png" width="64px" style="margin-top: 5px;">
		                <div class="user-info">
		                    <span><?php echo substr($_SESSION["username"], 0, 20)?></span>
		                    <span>ADM RightWay</span>
		                </div>
		            </a>

		        </div>
		        <?php } ?>


		        <!-- /user dropdown -->

		        <!-- Main navigation -->
		        <ul class="navigation">

		            <?php if($nivelTela==0){ ?>
		            <li <?php echo $paginaAtiva == 'home' ? 'class="active"' : '';?>><a href="."><span>Página Inicial</span> <i class="icon-screen2"></i></a></li>
		            <?php if($_SESSION['acesso']=='TOTAL'){ ?>

		            

		        	<?php } ?>
		            <li <?php echo $paginaAtiva == 'usuarios' ? 'class="active"' : '';?>><a href="usuarios/">
		                    <span>Usuarios</span> <i class="icon-user4"></i></a>
		             
		            </li>

		            <?php } ?>

		            <?php if($nivelTela==1){ ?>
		            <li <?php echo $paginaAtiva == 'home' ? 'class="active"' : '';?>><a href="../index.php"><span>Página Inicial</span> <i class="icon-screen2"></i></a></li>

		            <?php if($_SESSION['acesso']=='TOTAL'){ ?>

		            

		            <?php } ?>

					
					<li <?php echo $paginaAtiva == 'usuarios' ? 'class="active"' : '';?>><a href="../usuarios/"><span>Usuarios</span> <i class="icon-play"></i></a></li>


		            <?php } ?>


		        </ul>
		        <!-- /main navigation -->

		    </div>
		</div>
		<!-- /sidebar -->