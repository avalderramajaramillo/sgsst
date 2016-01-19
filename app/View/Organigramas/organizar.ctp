<?php echo $html->css('/js/ext-2.0.1/resources/css/ext-custom.css'); ?>
<?php echo $javascript->link('/js/ext-2.0.1/ext-custom.js'); ?>

<script type="text/javascript">
Ext.BLANK_IMAGE_URL = '<?php echo $html->url('/js/ext-2.0.1/resources/images/default/s.gif') ?>';

Ext.onReady(function(){

   var getnodesUrl = '<?php echo $html->url('/Organigramas/getnodes') ?>';
   var reorderUrl = '<?php echo $html->url('/Organigramas/reorder') ?>';
   var reparentUrl = '<?php echo $html->url('/Organigramas/reparent') ?>';

   var Tree = Ext.tree;

   var tree = new Tree.TreePanel({
      el:'tree-div',
      autoScroll:true,
      animate:true,
      enableDD:true,
      containerScroll: true,
      rootVisible: true,
      loader: new Ext.tree.TreeLoader({
         dataUrl:getnodesUrl
      })
    });

   var root = new Tree.AsyncTreeNode({
      text:'Categorías',
      draggable:false,
      id:'root'
   });

   tree.setRootNode(root);
   tree.setHeight('auto');

   var oldPosition = null;
   var oldNextSibling = null;

   tree.on('startdrag', function(tree, node, event){
      oldPosition = node.parentNode.indexOf(node);
      oldNextSibling = node.nextSibling;
   });

   tree.on('movenode', function(tree, node, oldParent, newParent, position){

   if (oldParent == newParent){
      var url = reorderUrl;
      var params = {'node':node.id, 'delta':(position-oldPosition)};
   } else {
      var url = reparentUrl;
      var params = {'node':node.id, 'parent':newParent.id, 'position':position};
   }

tree.disable();

Ext.Ajax.request({
   url:url,
   params:params,
   success:function(response, request) {
      // if the first char of our response is zero, then we fail the operation,
      // otherwise we re-enable the tree
      if (response.responseText.charAt(0) != 1){
         request.failure();
      } else {
         tree.enable();
      }
   },
   failure:function() {
      // we move the node back to where it was beforehand and
      // we suspendEvents() so that we don't get stuck in a possible infinite loop
      tree.suspendEvents();
      oldParent.appendChild(node);
      if (oldNextSibling){
         oldParent.insertBefore(node, oldNextSibling);
      }
      tree.resumeEvents();
      tree.enable();
      alert("Oh no! Your changes could not be saved!");
   }
});
});

tree.render();
root.expand();
});
</script>

<div id="tree-div"></div>