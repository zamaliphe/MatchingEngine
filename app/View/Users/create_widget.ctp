<?php

	$options = array(
		'369x96' 	=> '369x96',
		'191x86' 	=> '191x86',
		'160x122' 	=> '160x122',
		'153x103' 	=> '153x103',
	);
	$out[] = $form->input('size', array('options' => $options));


	$options = array(
		'blue' => 'blue',
		'red' => 'red',
		'green' => 'green',
		'yellow' => 'yellow',
	);
	$out[] = $form->input('color', array('options' => $options));

	$out[] = $form->input('text', array('value' => 'Place your text here!'));

	$value = $html->tag('div', '##**text**##', array('class' => 'offermyoffer_advertiser', 'style' => 'font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 13px; padding: 30px 10px 5px 10px; background: url(img/##**widget**##) no-repeat; width: ##**width**##px; height: ##**height**##px'));

	$replacedValue = str_replace('##**widget**##', 'widget_blue_369x96.png', $value);
	$replacedValue = str_replace('##**width**##', '369', $replacedValue);
	$replacedValue = str_replace('##**height**##', '96', $replacedValue);
	$replacedValue = str_replace('##**text**##', 'Place your text here!', $replacedValue);

	$out[] = $replacedValue;
	$out[] = $form->input('code', array('label' => false, 'before' => '<p>Copy & paste on your Site</p>', 'value' => $replacedValue, 'type' => 'textarea'));

	echo $html->tag('div', $myHtml->getHtml($out, false), array('class' => 'form'));

	echo $javascript->codeBlock('

		var value = "' . str_replace('"', '\"', $value) . '";

		function getCode(innerText) {

			var tmp = "widget_" + jQuery("#color").val() + "_" + jQuery("#size").val() + ".png";
			var src = "img/" + tmp;
			jQuery(".offermyoffer_advertiser").css("background", "url(" + src + ") no-repeat");

			var size = jQuery("#size").val().split("x");
			jQuery(".offermyoffer_advertiser").css("width", size[0]);
			jQuery(".offermyoffer_advertiser").css("height", size[1]);


			if (typeof(innerText) == "object") {
				var innerText = jQuery("#text").val();
			}

			replacedValue = value;
			replacedValue = replacedValue.replace("##**widget**##", tmp);
			replacedValue = replacedValue.replace("##**width**##", size[0]);
			replacedValue = replacedValue.replace("##**height**##", size[1]);
			replacedValue = replacedValue.replace("##**text**##", innerText);

			jQuery(".offermyoffer_advertiser").html(innerText);
			jQuery("#code").val(replacedValue);
		}


		jQuery("#text").keypress(function(e) {
			var ReverseCharcodes = {
				"48":"0","49":"1","50":"2",
				"51":"3","52":"4","53":"5","54":"6","55":"7","56":"8",
				"57":"9","97":"a","98":"b","99":"c","100":"d","101":"e",
				"102":"f","103":"g","104":"h","105":"i","106":"j","107":"k",
				"108":"l","109":"m","110":"n","111":"o","112":"p","113":"q",
				"114":"r","115":"s","116":"t","117":"u","118":"v","119":"w",
				"120":"x","121":"y","122":"z"
			};

			var text = jQuery("#text").val();
			if (e != undefined && ReverseCharcodes[e.which] != undefined) {
				text = text + ReverseCharcodes[e.which];
			}
			getCode(text);
		});


		jQuery("select").bind("change", getCode);


	');
?>