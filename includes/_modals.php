
<!-- Modal and option modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="optionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="optionModalLabel">Option Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button id="optionModalYes" type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
        <button id="optionModalNo" type="button" class="btn" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function display_modal(title_text,body_text,footer_text) {
    if(!title_text) { title_text = "Notice";                                               }
    if(!body_text)  { body_text  = "I have something to tell you, but I'm not sure what";  }

    $("#myModalLabel").html(title_text);
    $("#myModal .modal-body").html(body_text);
    $("#myModal").modal('show');
    $(document).bind("keypress",function(e) {
      if(e.which == 13 || e.which == 27) {
        $("#myModal").modal('hide');
      }
    });
  }

  function display_option_modal(title_text,body_text,yes_action,no_action,yes_text,no_text) {
    // Set the vars correctly.
    if(!title_text) { title_text = "You have a choice to make"; }
    if(!body_text)  { body_text  = "Choose yes or no.";         }
    if(!yes_action) { yes_action = function() { var x = 1; };   }
    if(!no_action)  { no_action  = function() { var x = 1; };   }
    if(!yes_text)   { yes_text   = "Yes";                       }
    if(!no_text)    { no_text    = "No";                        }

    // Set up the text accordingly.
    $("#optionModalLabel").html(title_text);
    $("#optionModal .modal-body").html(body_text);
    $("#optionModalYes").html(yes_text);
    $("#optionModalNo").html(no_text);
    $("#optionModal").modal('show');

    // Bind actions for click, tap, or keyboard (enter and escape):
    $("#optionModalYes").bind("click tap",yes_action);
    $("#optionModalNo").bind("click tap",no_action);
    $(document).bind("keypress",function(e) {
      if(e.which == 13) {
        $("#optionModal").modal('hide');
        yes_action();
      }
      if(e.which == 27) {
        $("#optionModal").modal('hide');
        no_action();
      }
    });
  }
</script>