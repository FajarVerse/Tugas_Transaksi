$(document).ready(function () {
	$("#no_pembelian").focus();

	// Get Data Merk
	const codeMerk = $("#code_merk");
	codeMerk.keypress(function (e) {
		if (e.which == 13) {
			const codeVal = $(this).val().toUpperCase();
			if (codeVal !== "D" && codeVal !== "M" && codeVal !== "V") {
				alert("Kode merk is not found");
			} else {
				$.get(
					"merk_ctrl/getMerkByCode",
					{ codeMerk: codeVal },
					function (data) {
						const merk = JSON.parse(data);
						console.log(merk);
						if (merk) {
							$("#merk_disket").val(merk.merk_disket).prop("disabled", true);
							codeJenis.focus();
						} else {
							alert("Data is Invalid");
						}
					}
				);
			}
		}
	});

	const codeJenis = $("#code_jenis");
	const hargaDisket = $("#hrg_disket");

	// Get Data Jenis
	codeJenis.keypress(function (e) {
		if (e.which == 13) {
			const jenisVal = $(this).val();
			const merkVal = codeMerk.val().toUpperCase();

			if (jenisVal !== "1" && jenisVal !== "2") {
				alert("Code Jenis not found");
			} else {
				$.get(
					"jenis_ctrl/getJenisByCode",
					{ jenisCode: jenisVal },
					function (data) {
						const jenis = JSON.parse(data);

						if (jenis) {
							$("#ket_jenis").val(jenis.keterangan).prop("disabled", true);
							$("#jml_pembelian").focus();
						} else {
							alert("Data is invalid");
						}
					}
				);

				switch (merkVal) {
					case "D":
						if (jenisVal == "1") {
							hargaDisket.val(17000);
						} else if (jenisVal == "2") {
							hargaDisket.val(25000);
						}
						break;
					case "V":
						if (jenisVal == "1") {
							hargaDisket.val(20000);
						} else if (jenisVal == "2") {
							hargaDisket.val(30000);
						}
						break;
					case "M":
						if (jenisVal == "1") {
							console.log(`merk : ${merkVal}`);
							hargaDisket.val(15000);
						} else if (jenisVal == "2") {
							console.log(`merk : ${merkVal}`);
							hargaDisket.val(20000);
						}
						break;
					default:
						hargaDisket.val(0);
						break;
				}
			}
		}
	});

	// Handle Jumlah Pembayaran
	$("#btn_count").click(function () {
		const jmlPembelian = $("#jml_pembelian").val();
		$("#jml_pembayaran").val(jmlPembelian * hargaDisket.val());
	});

	// Handle Save Data
	$("#btn_save").click(function () {
		const data = $("#form_pembelian").serialize();
		console.log(data);

		$.post("Pembelian_ctrl/insert", data, function () {
			alert("Data saved successfully");
		});
	});

	// Handle Cancel Progress
	$("#btn_cancel").click(function () {
		const inputs = document.querySelectorAll("input");

		inputs.forEach((input) => {
			input.value = "";
		});
	});
});
