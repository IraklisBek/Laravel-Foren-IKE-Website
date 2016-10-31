var boolll=true;
document.getElementById("original").checked=true;
var counter=0;
function webglAvailable() {
    try {
        var canvas = document.createElement( 'canvas' );
        return !!( window.WebGLRenderingContext && (
            canvas.getContext( 'webgl' ) ||
            canvas.getContext( 'experimental-webgl' ) )
        );
    } catch ( e ) {
        return false;
    }
}

var setMaterial = function(node, material) {
    node.material = material;
    if (node.children) {
        for (var i = 0; i < node.children.length; i++) {
            setMaterial(node.children[i], material);
        }
    }
}

function findValue(sumX, sumY, sumL, value1, value2, bool, xz){
    var x=[];
    var y=[];
    var l=[];

    for(var i=0; i<26; i++){
        x[i] = sumX;
        y[i] = sumY;
        sumX+=value1;
        if(bool==0){
            sumY+=value2;
        }else{
            sumY-=value2;
        }
    }
    for(var i=0; i<26; i++){
        for(var j=0; j<26; j++){
            if(i!=j){
                sumL*=($(xz).val().replace("mm", "").replace("mm", "") - x[j])/(x[i] - x[j]);
            }
        }
        l[i]=sumL;
        sumL=1;

    }
    var res=0;
    for(var i=0; i<26; i++){
        res+=y[i]*l[i];
    }

    return res;
}

var scene, camera, renderer;
var controls, guiControls, datGUI;
var stats;
var dae, spotLight;
var SCREEN_WIDTH, SCREEN_HEIGHT;

var loader;
var g, g1, g2, g3, g4, g5, g6, groupMegalesPleures, groupMikresPleures, groupPanoaristera, groupPanodeksia, groupKatodeksia, groupKatoaristera, groupVasi, groupMikos, groupMikos1, groupMikos2, groupPlatos, groupPlatos1, groupPlatos2, groupPlatos3;
function bringit(file){
    loader = new  THREE.ColladaLoader();
    groupMegalesPleures= new THREE.Object3D();
    groupMikresPleures= new THREE.Object3D();
    groupPanoaristera = new THREE.Object3D();
    groupPanodeksia = new THREE.Object3D();
    groupKatodeksia = new THREE.Object3D();
    groupKatoaristera = new THREE.Object3D();
    groupVasi = new THREE.Object3D();
    groupMikos = new THREE.Object3D();
    groupMikos1 = new THREE.Object3D();
    groupMikos2 = new THREE.Object3D();
    groupPlatos = new THREE.Object3D();
    groupPlatos1 = new THREE.Object3D();
    groupPlatos2 = new THREE.Object3D();
    groupPlatos3 = new THREE.Object3D();
    g = new THREE.Object3D();
    g1 = new THREE.Object3D();
    g2 = new THREE.Object3D();
    g3 = new THREE.Object3D();
    g4 = new THREE.Object3D();
    g5 = new THREE.Object3D();
    g6 = new THREE.Object3D();
    loader.options.convertUpAxis = true;
    loader.load(file, function (collada){
        dae = collada.scene;
        dae.updateMatrix();
        init();
        animate();
    });
}
bringit('/visitor/3DModels/theOriginal6.dae');
var light;
function init(){
    scene = new THREE.Scene();
    camera =  new THREE.PerspectiveCamera(45, window.innerWidth/window.innerHeight, 0.1, 2000);
    if ( webglAvailable() ) {
        renderer = new THREE.WebGLRenderer({antialias: true, preserveDrawingBuffer: true});
        renderer.setClearColor("black");
        renderer.setSize( window.innerWidth, window.innerHeight);
        renderer.shadowMapEnabled= true;
        renderer.shadowMapSoft = true;
        controls = new THREE.OrbitControls( camera, renderer.domElement );
        controls.addEventListener( 'change', render );
        camera.position.x = 5;
        camera.position.y = 5;
        camera.position.z = 6;
        camera.lookAt(scene.position);
        groupMegalesPleures.add(dae.getObjectByName( 'Cu'));
        groupMegalesPleures.add(dae.getObjectByName( 'Cu_001'));
        if((document.getElementById('original').checked || document.getElementById('tripes').checked)){
            groupMikresPleures.add(dae.getObjectByName( 'Cube'));
            groupMikresPleures.add(dae.getObjectByName( 'Cube_001'));
        }
        groupMikresPleures.scale.x*=0.98;
        if((document.getElementById('xeria').checked || document.getElementById('xeriatripes').checked)){
            groupMikresPleures.add(dae.getObjectByName( 'pleuresmikresxeroulia'));
            groupMikresPleures.add(dae.getObjectByName( 'pleuresmikresxeria'));
            groupMikresPleures.add(dae.getObjectByName( 'pleuresmikresxeroulia_001'));
            groupMikresPleures.add(dae.getObjectByName( 'pleuresmikresxeria_001'));
            g1.add(dae.getObjectByName( 'katoar'));
            g1.add(dae.getObjectByName( 'panoar'));
            g1.add(dae.getObjectByName( 'katodek'));
            g1.add(dae.getObjectByName( 'panodel'));
            scene.add(g1);
        }
        groupPanoaristera.add(dae.getObjectByName( 'panoaristera'));
        groupPanoaristera.add(dae.getObjectByName( 'Plane_002'));

        groupKatoaristera.add(dae.getObjectByName( 'katoaristera'));
        groupKatoaristera.add(dae.getObjectByName( 'Plane_003'));

        groupPanodeksia.add(dae.getObjectByName( 'panodeksia'));
        groupPanodeksia.add(dae.getObjectByName( 'Plane_001'));

        groupKatodeksia.add(dae.getObjectByName( 'katodeksia'));
        groupKatodeksia.add(dae.getObjectByName( 'Plane_004'));
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked)){
            groupVasi.add(dae.getObjectByName( 'vasitripes'));
            g.add(dae.getObjectByName( 'mpakalos'));
            g6.add(dae.getObjectByName( 'mpakalos2'));
            g2.add(dae.getObjectByName( 'mpakalos3'));
            g5.add(dae.getObjectByName( 'mpakalos31'));
            g3.add(dae.getObjectByName( 'mpakalos4'));
            g3.scale.x*=1.0207;
            g4.add(dae.getObjectByName( 'mpakalos5'));

        }else{
            groupVasi.add(dae.getObjectByName( 'vasi'));
        }
        groupVasi.scale.x*=1.02;
        groupVasi.scale.z*=1.01;
        groupMikos.add(dae.getObjectByName( 'panomesi'));
        groupMikos.add(dae.getObjectByName( 'katomesi'));
        groupPlatos.add(dae.getObjectByName( 'aristeraaristera'));
        groupPlatos.add(dae.getObjectByName( 'deksideksia'));
        groupMikresPleures.scale.z*=1.08;
        scene.add(groupMegalesPleures);
        scene.add(groupMikresPleures);
        scene.add(groupPanoaristera);
        scene.add(groupPanodeksia);
        scene.add(groupKatodeksia);
        scene.add(groupKatoaristera);
        scene.add(groupVasi);
        scene.add(groupMikos);
        scene.add(groupPlatos);
        groupVasi.scale.x*=1.005
        guiControls = new function(){
            this.rotationX  = 0.0;
            this.rotationY  = 0.0;
            this.rotationZ  = 0.0;
            this.lightX = 31;
            this.lightY = 62;
            this.lightZ = 31;
            this.intensity = 2.5;
            this.distance = 373;
            this.angle = 1.6;
            this.exponent = 38;
            this.shadowCameraNear = 34;
            this.shadowCameraFar = 2635;
            this.shadowCameraFov = 68;
            this.shadowCameraVisible=false;
            this.shadowMapWidth=512;
            this.shadowMapHeight=512;
            this.shadowBias=0.00;
            this.shadowDarkness=0.11;
        }
        light= new THREE.PointLight("#FFEAC3", 0.7);
        var light2 = new THREE.DirectionalLight("#FFEAC3", 0.5);
        var light3 = new THREE.DirectionalLight("#FFEAC3", 0.5);
        var light4 = new THREE.DirectionalLight("#FFEAC3", 0.5);
        var light5 = new THREE.DirectionalLight("#FFEAC3", 0.5);
        var light6 = new THREE.DirectionalLight("#FFEAC3", 0.5);
        var light7 = new THREE.DirectionalLight("#FFEAC3", 0.5);

        light.position.set(31,62,31);

        light2.position.set(0,0,-31);
        light3.position.set(0,-31,0);
        light4.position.set(-31,0,0);
        light5.position.set(0,13,66);
        light6.position.set(180,13,0);
        light7.position.set(-31,-62,-31);

        scene.add(light);
        scene.add(light2);
        scene.add(light3);
        scene.add(light4);
        scene.add(light5);
        scene.add(light6);
        scene.add(light7);
        $("#webGL-container").html(renderer.domElement);
    } else {
        var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
        var isFirefox = typeof InstallTrigger !== 'undefined';
        if(isSafari ){
            $('#webglSupport').css("display", "block");
        }else{
            $('#webglSupport2').css("display", "block");
        }
    }

}


function render() {
    light.position.x = guiControls.lightX;
    light.position.y = guiControls.lightY;
    light.position.z = guiControls.lightZ;
}

function animate(){
    requestAnimationFrame(animate);
    render();
    renderer.render(scene, camera);
}
function submitForm() {
    var fd = new FormData(document.getElementById("fileinfo"));
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: fd,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false
    }).done(function( data ) {
    });
    return false;
}
function installModel(file) {
    counter++;
    if(document.getElementById('tripes').checked && counter==1){
        counter=1000;
        $('#loading').css("display", "block");
        $('#webGL-container').css("visibility", "hidden");
        $('#tablee').css("visibility", "hidden");
        setTimeout(function(){document.getElementById("xeria").checked=true;},0);
        setTimeout(function(){installModel("visitor/3DModels/theXeroulia6.dae");},1000);
        setTimeout(function(){document.getElementById("tripes").checked=true;},2500);
        setTimeout(function(){document.getElementById("tripes").checked=true; installModel("visitor/3DModels/theTripes666.dae");},3500);
        setTimeout(function(){$('#loading').css("display", "none"); $('#webGL-container').css("visibility", "visible");
		$('#tablee').css("visibility", "visible");}, 5000);
    }else{

        bringit(file);
        if(counter!=1001){
            $('#loading').css("display", "block"); $('#webGL-container').css("visibility", "hidden"); $('#tablee').css("visibility", "hidden");
            setTimeout(function(){$('#loading').css("display", "none"); $('#webGL-container').css("visibility", "visible");$('#tablee').css("visibility", "visible");}, 2000);
        }
        if(counter==1000){
            installModel('visitor/3DModels/theTripes666.dae');

        }
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#x').val().replace("mm", "") <190){
            document.getElementById("x").value="191mm";

        }
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "") <120){
            document.getElementById("z").value="120mm";

        }
        if((document.getElementById('xeria').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "") <150){
            document.getElementById("z").value="150mm";

        }
        if((document.getElementById('xeria').checked || document.getElementById('xeriatripes').checked) && $('#y1').val().replace("mm", "") <60){
            document.getElementById("y1").value="60mm";

        }
        if((document.getElementById('xeria').checked || document.getElementById('xeriatripes').checked) && $('#y2').val().replace("mm", "") <60){
            document.getElementById("y2").value="60mm";

        }
        setTimeout(function(){change()},2000);
        setTimeout(function(){change()},3000);
        setTimeout(function(){change()},4000);
    }
}
var temppp=1;
function hideErrors(error){
    $(error).css("display", "none");
}
function change(){
    var ok = true;
    hideErrors('#au');
    hideErrors('#bu');
    hideErrors('#hu');
    hideErrors('#ho');
    hideErrors('#cu');
    hideErrors('#co');
    hideErrors('#aaa');
    hideErrors('#ao');
    hideErrors('#bo');
    hideErrors('#xu');
    hideErrors('#trWunder');
    hideErrors('#trHunter');
    hideErrors('#xWunder');
    hideErrors('#errorss');

    if($('#x').val().replace("mm", "").replace("mm", "") <150){
        $('#au').css("display", "block");
        ok=false;
    }
    if($('#z').val().replace("mm", "").replace("mm", "") <105){
        $('#bu').css("display", "block");
        ok=false;
    }
    if($('#y1').val().replace("mm", "").replace("mm", "") <33 || $('#y2').val().replace("mm", "")<33){
        $('#hu').css("display", "block");
        ok=false;
    }
    if($('#y1').val().replace("mm", "").replace("mm", "") >100 || $('#y2').val().replace("mm", "")>100){
        $('#ho').css("display", "block");
        ok=false;
    }
    if($('#y3').val().replace("mm", "").replace("mm", "") <40){
        $('#cu').css("display", "block");
        ok=false;
    }
    if($('#y3').val().replace("mm", "").replace("mm", "") >120){
        $('#co').css("display", "block");
        ok=false;
    }
    if($('#x').val().replace("mm", "").replace("mm", "") >400){
        $('#ao').css("display", "block");
        ok=false;
    }
    if($('#z').val().replace("mm", "") >300){
        $('#bo').css("display", "block");
        ok=false;
    }
    if((document.getElementById('xeriatripes').checked || document.getElementById('xeria').checked) && $('#y2').val().replace("mm", "") <60){
        $('#xu').css("display", "block");
        ok=false;
    }
    if((document.getElementById('xeriatripes').checked || document.getElementById('xeria').checked) && $('#z').val().replace("mm", "") <150){
        $('#xWunder').css("display", "block");
        ok=false;
    }

    if((document.getElementById('xeriatripes').checked || document.getElementById('tripes').checked) && ($('#z').val().replace("mm", "")<120)){
        $('#trWunder').css("display", "block");
        ok=false;
    }
    if((document.getElementById('xeriatripes').checked || document.getElementById('tripes').checked) && ($('#x').val().replace("mm", "") <170 )){
        $('#trHunder').css("display", "block");
        ok=false;
    }

    if(ok){
        var sint3=findValue(170, 0.315, 1, 230, 5.335, 0, '#x');
        var sint7=findValue(120, 0.1, 1, 80, 0.475, 0, '#z');
        var sint8=findValue(120, 1.315, 1, 180, 2.442 - 1.315, 0, '#z');


        groupPlatos.getObjectByName( 'aristeraaristera').scale.x=sint3;
        groupPlatos.getObjectByName( 'aristeraaristera').position.x=findValue(170, -0.206, 1, 230, 26.606+0.206, 0, '#x');; //170 -0.206 400 26.606
        groupPlatos.getObjectByName( 'deksideksia').scale.x=sint3;
        groupPlatos.getObjectByName( 'deksideksia').position.x=-findValue(170, -0.206, 1, 230, 26.606+0.206, 0, '#x');
        groupPlatos.scale.z=$('#z').val().replace("mm", "")/80;

        if($('#z').val().replace("mm", "") <121){
            groupPlatos.scale.z=$('#z').val().replace("mm", "")/83.5;
        }
        if($('#z').val().replace("mm", "") <110){
            groupPlatos.scale.z=$('#z').val().replace("mm", "")/86;
        }

        groupMikos.getObjectByName('panomesi').scale.z=sint7;
        groupMikos.getObjectByName('panomesi').position.z=-sint8 + 0.003;//120 0.967
        groupMikos.getObjectByName('katomesi').scale.z=sint7;
        groupMikos.getObjectByName('katomesi').position.z=sint8 - 0.003; //120 1,315 | 300 2.442
        groupMikos.scale.x=$('#x').val().replace("mm", "")/145;

        var sintWidth11=findValue(125, 0.78, 1, 45, 0.2852, 0, '#x');;
        var sintWidth12=findValue(100, 0.83, 1, 19, 0.17, 0, '#z');
        var sintWidth13=findValue(100, -1.068, 1, 19, 0.2244, 1, '#z');;

        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && ($('#x').val().replace("mm", "")<=170) || $('#z').val().replace("mm", "") <120){
            groupVasi.scale.x=sintWidth11;
            groupVasi.scale.z=sintWidth12;
            groupVasi.position.x=findValue(125, 0.0074, 1, 65, 0.0006, 0, $('#x'));
            if($('#z').val().replace("mm", "")<120){
                groupMikos.getObjectByName('panomesi').scale.z=0.1;
                groupMikos.getObjectByName('panomesi').position.z=sintWidth13;//100 1.205 119
                groupMikos.getObjectByName('katomesi').scale.z=0.1;
                groupMikos.getObjectByName('katomesi').position.z=-sintWidth13;
            }

            if($('#x').val().replace("mm", "")<=177){
                groupPlatos.getObjectByName('aristeraaristera').scale.x=0.6;
                groupPlatos.getObjectByName('aristeraaristera').position.x=1.77; //145 1.661 | 170
                groupPlatos.getObjectByName('deksideksia').scale.x=0.6;
                groupPlatos.getObjectByName('deksideksia').position.x=-1.7; //145 1.661 | 170

            }
        }

        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#z').val().replace("mm", "")>=120){
            groupVasi.scale.z=1.04;
        }
        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#z').val().replace("mm", "")>=159){
            groupVasi.scale.z=1.5;
        }

        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#x').val().replace("mm", "")>170){
            groupVasi.scale.x=1.04;
        }
        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#x').val().replace("mm", "")>220){
            groupVasi.scale.x=1.1;
        }
        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#x').val().replace("mm", "")>310){
            groupVasi.scale.x=1.2;
        }
        if((document.getElementById('original').checked || document.getElementById('xeria').checked) && $('#z').val().replace("mm", "")>200 && $('#x').val().replace("mm", "") < 178){
            if($('#x').val().replace("mm", "")<=177){
                groupPlatos.getObjectByName('aristeraaristera').scale.x=0.6;
                groupPlatos.getObjectByName('aristeraaristera').position.x=findValue(145, 1.661, 1, 32, -(1.661-1.2887), 0, '#x'); //145 1.661 | 170 1.2887
                groupPlatos.getObjectByName('deksideksia').scale.x=0.6;
                groupPlatos.getObjectByName('deksideksia').position.x=-findValue(145, 1.661, 1, 32, -(1.661-1.2887), 0, '#x');; //145 1.661 | 170

            }
        }
        if((document.getElementById('xeria').checked) && $('#x').val().replace("mm", "")<180){
            groupVasi.position.x=0;
            temp = groupVasi.scale.x*1.0008;
            groupVasi.scale.x=temp;
        }

        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#x').val().replace("mm", "") <177 && $('#z').val().replace("mm", "")>159){
            scene.add(g);

        }else{
            scene.remove(g);
        }
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "")>200){
            scene.add(g6);
            if((document.getElementById('tripes').checked)){
                g.scale.z=1.3;
            }
        }else{
            scene.remove(g6);
        }
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "")>242){
            scene.add(g2);
        }else{
            scene.remove(g2);
        }
        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "")>283){
            scene.add(g5);
        }else{
            scene.remove(g5);
        }

        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#x').val().replace("mm", "") >188){
            scene.add(g3);
        }else{
            scene.remove(g3);
        }

        if((document.getElementById('tripes').checked || document.getElementById('xeriatripes').checked) && $('#z').val().replace("mm", "") >270){
            scene.add(g4);
        }else{
            scene.remove(g4);
        }
        if($('#x').val().replace("mm", "")>270){
            groupMegalesPleures.scale.x*=1.04;
        }else{
            groupMegalesPleures.scale.x*=1.015;
        }
        if(!document.getElementById('xeria').checked && !document.getElementById('xeriatripes').checked ){
            groupMikresPleures.scale.z*=1.04;
        }

        if(document.getElementById('xeriatripes').checked || document.getElementById('xeria').checked){
            groupMikresPleures.getObjectByName('pleuresmikresxeria').scale.y=findValue(60, 0.2, 1, 40, 0.45, 0, '#y2');;
            groupMikresPleures.getObjectByName('pleuresmikresxeria').position.y=findValue(60, -0.01, 1, 40, -0.047, 0, '#y2');;
            groupMikresPleures.getObjectByName('pleuresmikresxeria_001').scale.y=findValue(60, 0.2, 1, 40, 0.45, 0, '#y2');;
            groupMikresPleures.getObjectByName('pleuresmikresxeria_001').position.y=findValue(60, -0.01, 1, 40, -0.047, 0, '#y2');;;

            groupMikresPleures.getObjectByName('pleuresmikresxeroulia').position.y=findValue(60, 0.086, 1, 40, 0.864, 0, '#y2')-0.01;;
            groupMikresPleures.getObjectByName('pleuresmikresxeroulia_001').position.y=findValue(60, 0.086, 1, 40, 0.864, 0, '#y2')-0.01;;
            g1.scale.y=$('#y2').val().replace("mm", "")/60*3.8/2.8 -0.02;
            g1.position.y=0.006;

            g1.getObjectByName('katoar').scale.z=findValue(112, 1, 1, 300-112, 5.5, 0, '#z');;;
            g1.getObjectByName('katoar').position.z=findValue(112, 0, 1, 300-112, -3.1, 0, '#z');;;

            g1.getObjectByName('panoar').scale.z=findValue(112, 1, 1, 300-112, 5.5, 0, '#z');;;
            g1.getObjectByName('panoar').position.z=-findValue(112, 0, 1, 300-112, -3.1, 0, '#z');;;

            g1.getObjectByName('panodel').scale.z=findValue(112, 1, 1, 300-112, 5.5, 0, '#z');;;
            g1.getObjectByName('panodel').position.z=-findValue(112, 0, 1, 300-112, -3.1, 0, '#z');;;

            g1.getObjectByName('katodek').scale.z=findValue(112, 1, 1, 300-112, 5.5, 0, '#z');;;
            g1.getObjectByName('katodek').position.z=findValue(112, 0, 1, 300-112, -3.1, 0, '#z');;;

            groupMikresPleures.getObjectByName('pleuresmikresxeria_001').position.x=findValue(125, -0.488, 1, 275, 3.260, 0, '#x');;
            groupMikresPleures.getObjectByName('pleuresmikresxeria').position.x=-findValue(125, -0.488, 1, 275, 3.260, 0, '#x');;
            groupMikresPleures.getObjectByName('pleuresmikresxeroulia').position.x=findValue(145, -0.283, 1, 255, 2.74+0.283, 0, '#x');;;
            groupMikresPleures.getObjectByName('pleuresmikresxeroulia_001').position.x=-findValue(145, -0.283, 1, 255, 2.74+0.283, 0, '#x');;;
            g1.getObjectByName('katodek').position.x=findValue(145, -0.277, 1, 255, 2.686+0.277, 0, '#x');;
            g1.getObjectByName('panodel').position.x=findValue(145, -0.277, 1, 255, 2.686+0.277, 0, '#x');;
            g1.getObjectByName('panoar').position.x=-findValue(145, -0.277, 1, 255, 2.686+0.277, 0, '#x');;
            g1.getObjectByName('katoar').position.x=-findValue(145, -0.277, 1, 255, 2.686+0.277, 0, '#x');;
        }else{
            groupMikresPleures.scale.y=$('#y2').val().replace("mm", "")/60*3.8/2.8;
        }
        groupMegalesPleures.scale.y=$('#y1').val().replace("mm", "")/60*3.8/2.8;

        var scaleXBigSides= findValue(145, 0.83, 1, 255, 1.55, 0, '#x');
        var scaleZSmallSides = findValue(100, 0.84, 1, 200, 2.01, 0, '#z');
        groupMegalesPleures.scale.x=scaleXBigSides;
        groupMegalesPleures.getObjectByName('Cu').position.z=findValue(100, -0.12, 1, 200, 2.38, 0, '#z');//125 -0.12, 400 2.26
        groupMegalesPleures.getObjectByName('Cu_001').position.z=-findValue(100, -0.12, 1, 200, 2.38, 0, '#z');
        if((document.getElementById('original').checked || document.getElementById('tripes').checked)){
            groupMikresPleures.scale.z=scaleZSmallSides ;
            groupMikresPleures.getObjectByName('Cube').position.x=findValue(125, -0.488, 1, 275, 3.260, 0, '#x');;//125 -0.515 400 2.745
            groupMikresPleures.getObjectByName('Cube_001').position.x=-findValue(125, -0.488, 1, 275, 3.260, 0, '#x');;//125 -0.515 400 2.745
        }
        groupPanoaristera.getObjectByName( 'Plane_002').scale.y=$('#y3').val().replace("mm", "")/60*3.8/2.8*6.2/2.2/177;
        groupPanodeksia.getObjectByName( 'Plane_001').scale.y=$('#y3').val().replace("mm", "")/60*3.8/2.8*6.2/2.2/177;
        groupKatoaristera.getObjectByName( 'Plane_003').scale.y=$('#y3').val().replace("mm", "")/60*3.8/2.8*6.2/2.2/177;
        groupKatodeksia.getObjectByName( 'Plane_004').scale.y=$('#y3').val().replace("mm", "")/60*3.8/2.8*6.2/2.2/177;

        var sintLength=findValue(127, 0.5, 1, 8.6, 0.1, 1, '#x');
        groupPanoaristera.getObjectByName( 'panoaristera').position.x=sintLength;
        groupPanoaristera.getObjectByName( 'Plane_002').position.x=-findValue(125, -0.51, 1, 275, 3.194, 0, '#x');

        groupPanodeksia.getObjectByName( 'panodeksia').position.x=-sintLength;
        groupPanodeksia.getObjectByName( 'Plane_001').position.x=findValue(125, -0.51, 1, 275, 3.194, 0, '#x');

        groupKatodeksia.getObjectByName( 'katodeksia').position.x=-sintLength;
        groupKatodeksia.getObjectByName( 'Plane_004').position.x=findValue(125, -0.51, 1, 275, 3.194, 0, '#x');

        groupKatoaristera.getObjectByName( 'katoaristera').position.x=sintLength;
        groupKatoaristera.getObjectByName( 'Plane_003').position.x=-findValue(125, -0.51, 1, 275, 3.194, 0, '#x');
        var sintWidth=findValue(103.1, 0.1, 1, 8.4, 0.1, 1, '#z');

        groupPanoaristera.getObjectByName( 'panoaristera').position.z=sintWidth;
        groupPanoaristera.getObjectByName( 'Plane_002').position.z=-findValue(100, -0.122, 1, 200, 2.382, 0, '#z');

        groupPanodeksia.getObjectByName( 'panodeksia').position.z=sintWidth;
        groupPanodeksia.getObjectByName( 'Plane_001').position.z=-findValue(100, -0.122, 1, 200, 2.382, 0, '#z');

        groupKatodeksia.getObjectByName( 'katodeksia').position.z=-sintWidth;
        groupKatodeksia.getObjectByName( 'Plane_004').position.z=findValue(100, -0.122, 1, 200, 2.382, 0, '#z');

        groupKatoaristera.getObjectByName( 'katoaristera').position.z=-sintWidth;
        groupKatoaristera.getObjectByName( 'Plane_003').position.z=findValue(100, -0.122, 1, 200, 2.382, 0, '#z');//100 0.09 300 2.29
        if($('#x').val().replace("mm", "")>270){
            groupMegalesPleures.scale.x*=1.04;
        }else{
            groupMegalesPleures.scale.x*=1.015;

        }
        if(document.getElementById('original').checked){
            groupMikresPleures.scale.z*=1.04;
        }
    }else{
        $('#errorss').css("display", "block");
        ok = true;
    }
}

$(window).resize(function(){


    SCREEN_WIDTH =  window.innerWidth;
    SCREEN_HEIGHT = window.innerHeight;

    camera.aspect = SCREEN_WIDTH / SCREEN_HEIGHT;
    camera.updateProjectionMatrix();

    renderer.setSize( SCREEN_WIDTH, SCREEN_HEIGHT );



});
$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        change();
    }
});


function setValue() {

    setTimeout(function(){document.getElementById("original").checked=true;},500);
    setTimeout(function(){change();},2000);
    setTimeout(function(){$('#loading').css("display", "none"); $('#webGL-container').css("visibility", "visible");
        $('#tablee').css("visibility", "visible");}, 2500);
}
setValue();
//setInterval(function(){
    $('#tablee').css({"font-size" : window.innerWidth*0.011, "width" : window.innerWidth*0.2});
    $('input[type=text]').css({"height" : window.innerWidth*0.019, "font-size" : window.innerWidth*0.012});

//}, 1);






