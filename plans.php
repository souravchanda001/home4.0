<?php
require_once "header.php";
?>



<div class="plan-container">
    <h1><span style="color:#0099ff;margin:0;">P</span>lans</h1>

    <div class="plan-div">
        <div class="planTextedit" id="planDiv1">
            <div style="display: inline-block"><a href="Edit-plan?sec=edit"><button class="editBtn" type="submit">Edit</button></a></div>
            <div class="plans-text"><i class="fas fa-sun"></i> Day Plan <sup id="active1"> UnActive </sup></div>
        </div>
        <div class="bridge-div" id="brg1">.</div>
        <div class="power-button" id="powerbtn1" status="off" ><i class="fa fa-power-off fa-3x"  id="btn1"></i></div>
    </div>

    <div class="plan-div">
        <div class="planTextedit" id="planDiv2">
            <div style="display: inline-block"><a href="Edit-plan?sec=edit"><button class="editBtn" type="submit">Edit</button></a></div>
            <div class="plans-text"><i class="fa fa-moon-o"></i> Night Plan <sup id="active2"> UnActive </sup></div>
        </div>
        <div class="bridge-div" id="brg2">.</div>
        <div class="power-button" id="powerbtn2" status="disbaled" onclick="glow2()"><i class="fa fa-power-off fa-3x"  id="btn2"></i></div>
    </div>

    <div class="plan-div">
        <div class="planTextedit" id="planDiv3">
            <div style="display: inline-block"><button class="editBtn" type="submit">Edit</button></div>
            <div class="plans-text"><i class="fa fa-users"></i> Guest Plan <sup id="active3"> UnActive </sup></div>
        </div>
        <div class="bridge-div" id="brg3">.</div>
        <div class="power-button" id="powerbtn3" status="off" onclick="glow3()"><i class="fa fa-power-off fa-3x"  id="btn3"></i></div>
    </div>

    <div class="plan-div">
        <div class="planTextedit" id="planDiv4">
            <div style="display: inline-block"><button class="editBtn" type="submit">Edit</button></div>
            <div class="plans-text"><i class="fa fa-pencil-square-o"></i> Custom Plan <sup id="active4"> UnActive </sup></div>
        </div>
        <div class="bridge-div" id="brg4">.</div>
        <div class="power-button" id="powerbtn4" status="off" onclick="glow4()"><i class="fa fa-power-off fa-3x"  id="btn4"></i></div>
    </div>

    <div class="plan-div">
        <div class="planTextedit" id="planDiv5">
            <div style="display: inline-block"><button class="editBtn" type="submit">Edit</button></div>
            <div class="plans-text"><i class="fas fa-door-open"></i> Outside Plan <sup id="active5"> UnActive </sup></div>
        </div>
        <div class="bridge-div" id="brg5">.</div>
        <div class="power-button" id="powerbtn5" status="off" onclick="glow5()"><i class="fa fa-power-off fa-3x"  id="btn5"></i></div>
    </div>
    <div>
        <a href="Edit-plan?sec=add">
            <div class="power-button" style="position:relative;margin:50px auto 10px;color: #ccc; width:35px;height:35px"><i class=" fas fa-plus fa-2x"></i></div>
        </a>

        <div style="margin:0px auto;text-align: center;padding:0 10px 0 0;color:#0099ff">Add More Plans</div>


    </div>
</div>

<?php
require_once "footer.php";
?>
<script>
    $(document).ready(function(){
    $(".power-button[status*='o']").click(function(){
        var el = $(this).parent();
        var status = $(this).attr("status");
        //alert(status);
        if(status == "off"){//for turning on

            el.find(".planTextedit").css({
                "borderColor": "#00ff67"
            });
            el.find(".bridge-div").css({
                "background": "#00ff67"
            });
            $(this).css({
                "color": "#00ff67",
                "borderColor": "#00ff67"
            });
            el.find(".plans-text").children("sup").html("Active");
            el.find(".plans-text").children("sup").css({
                "color": "#0099ff"
            });
            $(this).attr("status", "on");

        }else{//for turning off

            el.find(".planTextedit").css({
                "borderColor": "#fff"
            });
            el.find(".bridge-div").css({
                "background": "#fff"
            });
            $(this).css({
                "color": "#ccc",
                "borderColor": "#fff"
            });
            el.find(".plans-text").children("sup").html("UnActive");
            el.find(".plans-text").children("sup").css({
                "color": "#ccc"
            });
            $(this).attr("status", "off");
            
        }
        
    });
    //switches
});
</script>
