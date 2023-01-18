
<?php
/**Msj sc: sesion iniciada correctamente ***/
if(isset($_REQUEST['sc'])){ ?>
<div class="row sc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        Ha iniciado la sesión correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj csc: msj de cerrar sesion correctamente***/
if(isset($_REQUEST['csc'])){ ?>
<div class="row csc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        La sesión se ha cerrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj dui: datos del usurio incorrectos ***/
if(isset($_REQUEST['dui'])){ ?>
<div class="row dui" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Oh !</strong>
        Algunos datos son incorrectos.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>





<?php
/**Msj Datos del Usuario en session Actualizados du= datos user***/
if(isset($_REQUEST['du'])){ ?>
<div class="row du" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	Sus datos personales fuerón actualizados con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj de destino nacional registrado bien***/
if(isset($_REQUEST['dn'])){ ?>
<div class="row dn" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El Destino Nacional fue registrado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<?php
/**Msj Destino Nacional Actualizado***/
if(isset($_REQUEST['da'])){ ?>
<div class="row da" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El destino Nacional fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj destino nacional borrado***/
if(isset($_REQUEST['dnb'])){ ?>
<div class="row dnb" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El destino nacional fue borrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj destino Internacional Borrado***/
if(isset($_REQUEST['dib'])){ ?>
<div class="row dib" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El Destino internacional fue Eliminado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<?php
/**Msj destino Internaciona Registrado***/
if(isset($_REQUEST['di'])){ ?>
<div class="row di" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	El destino Internacional fue registrado correctamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<?php
/**Msj Destino Internacional Actualizado***/
if(isset($_REQUEST['dia'])){ ?>
<div class="row dia" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
      	<strong>Felicitaciones !</strong>
      	La información del destino internacional fue actualizada.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<!------------------->
<!------------------->
<!-----Cambiando Logo tipo lt: logotipo---------->
<?php if(isset($_REQUEST['lt'])){ ?>
<div class="row lt" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Logotipo fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----Cambiando banner  b1: banner1---------->
<?php if(isset($_REQUEST['b1'])){ ?>
<div class="row b1" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Banner 1 fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!-----Cambiando banner  b2: banner2---------->
<?php if(isset($_REQUEST['b2'])){ ?>
<div class="row b2" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Banner 2 fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>

<!-----msj Pdf actualizado---------->
<?php if(isset($_REQUEST['pdfa'])){ ?>
<div class="row lrs" id="pdfa">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El PDF fue actualizado con éxito.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>




<!-------msj el correo ya existe cuando se intente registrar :cex=correo existe------------>
<?php if(isset($_REQUEST['cex'])){ ?>
<div class="row cex" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Oh !</strong>
        El Correo ya Existe, por favor verfique o intente con otro Correo.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>



<!------------------vbc mjs video borado corretamente ---->
<?php if(isset($_REQUEST['vbc'])){ ?>
<div class="row vbc" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El video fue borrado exitosamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!----msj nuevo curso agregado correctamente --->
<?php if(isset($_REQUEST['cr'])){ ?>
<div class="row cr" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El fue registrado exitosamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>


<!---curso borrado existosamente --->
<?php if(isset($_REQUEST['cbe'])){ ?>
<div class="row cbe" id="proBanner">
<div class="col-md-12 grid-margin">
  <div class="card bg-gradient-primary border-0">
    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
      <p class="mb-0 text-white font-weight-medium" style="margin: 0 auto;">
        <strong>Felicitaciones !</strong>
        El Curso fue Borrado exitosamente.
      </p>
      
      <div class="d-flex">
        <button id="bannerClose" class="btn border-0 p-0">
          <i class="mdi mdi-close text-white"></i>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>