<?php

function navJefe()
{
?>
<div id="sidebarJefe"> <!--BARRA LATERAL-->
	<h1 id="logo"><a href="homeJefe.php">·Fractum!</a></h1>		
            <nav id="nav"> 
          		<ul>
            		<div align="center">
                   		<li class="current">
                        	<a href="consultarJefe.php">
                        		<img src="../../../Resources/images/DefaultAvatar.png"><em><strong><br>"jefeNegocio:" <?php echo $_SESSION["dni"];?></strong></em><strong></strong>
                        	</a>
                     	</li>
                     	<li class='current'><a href="#">Pendientes: <span class="badge">100</span></a></li>
						<li class="current"><a href="#">GESTIONAR INCIDENCIAS</a></li>
                       	<li class="current"><a href="../jefe/altaExterno.php">GESTIONAR USUARIOS</a></li>
                       	<li class="current"><a href="#">GESTIONAR MÁQUINAS</a></li>
						<li class="current"><a href="#">GESTIONAR SERVCICOS</a></li>
						<li class='current'><a href="#" id='Logout_Usuario' onclick ='return Salir_Usuario()'> > Log Out</a></li>
                        <form method="POST" action="#" style="text-align:center">
                    	<section class="box search">
							<input type="text" name="busqueda" placeholder="Buscar..." value=""/>
                  		</section>
							<div hidden><input type="submit" name="buscar"/></div>
                        </form>
                  	</div>
				</ul>
			</nav>
</div> <!-- FIN BARRA LATERAL -->
<?php
}

function navInterno()
{
?>
<div id="sidebarInterno"> <!--BARRA LATERAL-->
			<h1 id='logo'><a href='homeInterno.php'>·Fractum!</a></h1> 	
                <nav id='nav'> 
              		<ul>
                		<div align='center'>
                       		<li class='current'>
                            	<a href='consultarInterno.php'>
                            		<img src='../../../Resources/images/DefaultAvatar.png'><em><strong><br>"operarioInterno:" <?php echo $_SESSION["dni"];?></strong></em><strong></strong></img>
                            	</a>
                         	</li>
							<!--NOTIFICACIONES-->		
							<li class='current'><a href="#">Pendientes: <span class="badge">100</span></a></li>
							<!-- FIN NOTIFICACIONES-->
							<li class='current'><strong><a href="#">Listar Incidencias</a></strong></li>
							<li class='current'><a href="#">Alta incidencia</a></li>
							<li class='current'><a href="#">Listar maquinas</a></li>
                            <li class='current'><a href='mailto:jefe@fractum.com?cc=administracion@fractum.es'>Contacto jefe</a></li>
							<li class='current'><a href="#" id='Logout_Usuario' onclick ='return Salir_Usuario()'> > Log Out</a></li>
                            <form method='POST' action="#" style='text-align:center'>
                        	<section class='box search'>
								<input type='text' name='busqueda' placeholder='Buscar...'/>
                      		</section>
								<div hidden><input type='submit' name='buscar'/></div>
                            </form>
                      	</div>
					</ul>
				</nav>
		</div><!-- FIN BARRA LATERAL -->
<?php
}

function navExterno()
{
?>
<div id="sidebarExterno"> <!--BARRA LATERAL-->
			<h1 id='logo'><a href='homeExterno.php'>·Fractum!</a></h1> 	
                <nav id='nav'> 
              		<ul>
                		<div align='center'>
                       		<li class='current'>
                            	<a href='consultarExterno.php'>
                            		<img src='../../../Resources/images/DefaultAvatar.png'><em><strong><br>"operarioExterno:" <?php echo $_SESSION["dni"];?></strong></em><strong></strong></img>
                            	</a>
                         	</li>
                         	<!--NOTIFICACIONES-->		
							<li class='current'><a href="#">Pendientes: <span class="badge">50</span></a></li>
							<!-- FIN NOTIFICACIONES-->
							<li class='current'><strong><a href="#">Listar Incidencias</a></strong></li>
							<li class='current'><a href="#">Listar maquinas</a></li>
                            <li class='current'><a href="#">Contacto jefe</a></li>
							<li class='current'><a href="#" id='Logout_Usuario' onclick ='return Salir_Usuario()'>   > Log Out</a></li>
                            <form method='POST' action="#" style='text-align:center'>
                        	<section class='box search'>
								<input type='text' name='busqueda' placeholder='Buscar...'/>
                      		</section>
								<div hidden><input type='submit' name='buscar'/></div>
                            </form>
                      	</div>
					</ul>
				</nav>
</div> <!-- FIN BARRA LATERAL -->
<?php
}
?>
