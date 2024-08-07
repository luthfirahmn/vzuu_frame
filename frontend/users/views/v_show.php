<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="d-flex flex-column flex-column-fluid">
	<div id=" kt_app_content" class="app-content flex-column-fluid">
		<div id="kt_app_content_container" class="app-container container-fluid">

			<?= title_form($titlePage) ?>

			<div class="row mt-6">
				<div class="card shadow-sm">

					<div class="d-flex flex-end gap-4 mt-6">
						<button class="btn btn-success btn-sm fw-bold" type="button" id="btnAdd" data-type="modal" data-url="<?= base_url('users/insert') ?>" data-fullscreenmodal="0">
							<i class="fa-solid fa-plus fs-4 me-2"></i>
							Tambah Users
						</button>
					</div>

					<div class="card-body">
						<?= $table ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<script src="<?= JQUERY ?>"></script>
<script src="<?= DATATABLE_PLUGINS ?>"></script>
<script>
	$(document).ready(function() {
		var baseurl = base_url() + "users/show";

		var column = [{
				data: null,
				render: function(data, type, row, meta) {
					return meta.row + 1;
				},
			},
			{
				data: "fullname",
				width: "25%"
			},
			{
				data: "email",
				className: "dt-left"
			},
			{
				data: "status",
				render: function(data) {
					let status = "";
					if (data != 1) {
						status = `<span class="badge badge-light-danger me-auto">In Active</span>`;
					} else {
						status = `<span class="badge badge-light-success me-auto">Active</span>`;
					}

					return status;
				},
			},
			{
				data: "action",
				width: "20%"
			},
		];

		gridDatatables(baseurl, column);

		sweetAlertConfirm();
		libraryInput();
		modalClose();
		process();
		editData();

		$(document).on("click", "#btnAdd", function() {
			buttonAction($(this));
		});

		$(document).on("click", ".btn-list-menu", function() {
			buttonAction($(this));

			$(document).on("change", '[id^="checked_all_"]', function() {
				let isChecked = $(this).prop("checked");
				let $container = $(this).closest(".card, tbody");

				if ($container.is(".card")) {
					$container
						.find('input[type="checkbox"]')
						.prop("checked", isChecked)
						.val(isChecked ? 1 : 0);
				} else if ($container.is("tbody")) {
					$container
						.find('input[type="checkbox"]')
						.not(this)
						.prop("checked", isChecked)
						.val(isChecked ? 1 : 0);
				}
			});

			$("input.form-check-input").each(function() {
				let data = $(this);
				for (let i = 0; i < data.length; i++) {
					let getId = $(data[i]).attr("id");
					$(document).on("change", "#" + getId, function() {
						if ($(this).attr("id") === "view") {
							$(this)
								.closest(".form-check")
								.siblings()
								.find("input[id!='view']")
								.prop("checked", false)
								.val(0);
						} else if (
							["insert", "update", "delete"].includes($(this).attr("id"))
						) {
							$(this)
								.closest(".form-check")
								.siblings()
								.find("input#view")
								.prop("checked", true)
								.val(1);
						}

						$(this).val(this.checked ? 1 : 0);
					});
				}
			});
		});

		$(document).on("change", "input[name='rolename']", function() {
			$("#rolename").next(".invalid-feedback").remove();
		});
	});
</script>