<html>
  <head>

    <link href="/jTable-PHP-Samples/Codes/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="/jTable-PHP-Samples/Codes/scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="/jTable-PHP-Samples/Codes/scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="/jTable-PHP-Samples/Codes/scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="/jTable-PHP-Samples/Codes/scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	<style type="text/css">
	#PeopleTableContainer {
  
</style>
  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 1250px;"></div>

	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'BlackFox Studio Presents - The HI App :)',
				paging: true,
				pageSize: 15,
				sorting: true,
				defaultSorting: 'Name ASC',
				openChildAsAccordion: true,
				actions: {
					listAction: 'PersonActionsPagedSorted.php?action=list',
					createAction: 'PersonActionsPagedSorted.php?action=create',
					updateAction: 'PersonActionsPagedSorted.php?action=update',
					deleteAction: 'PersonActionsPagedSorted.php?action=delete'
				},
					fields: {
					PersonId: {
						key: true,
						create: false,
						edit: false,
						list: false
					},

					HomeLocationName: {
						title: 'Home Location',
						width: '15%'
					},
					
					Name: {
						title: 'Author Name',
						width: '10%'
					},
					Age: {
						title: 'Age',
						width: '10%'
					},
					HomeItem: {
						title: 'Item Name',
						width: '20%'
					},
					ItemDescription: {
						title: 'Item Description',
						width: '20%'
					},
					ItemRoom: {
						title: 'Room',
						width: '10%'
					},
					DrawerNum: {
						title: 'Room Drawer Number',
						width: '20%'
					},

					RecordDate: {
						title: 'Record date',
						width: '20%',
						type: 'date',
						create: false,
						edit: false
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>
