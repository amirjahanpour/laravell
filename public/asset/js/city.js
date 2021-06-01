function iranwebsv(state)
{
	with(document.getElementById('city'))
	{
		options.length = 0;

		if(state == 0)
		{
			options[0] = new Option('لطفا استان را انتخاب نمایید' , '0');
		}

		if(state == 1)
		{
			options[0] = new Option('\'لطفا شهر را انتخاب نمایید\'' , '0');
			options[1] = new Option('اهر' , '1');
			options[2] = new Option('ایلخچی' , '2');
			options[3] = new Option('آبش احمد' , '3');
			options[4] = new Option('آذرشهر' , '4');
			options[5] = new Option('آقکند' , '5');
			options[6] = new Option('باسمنج' , '6');
			options[7] = new Option('بخشایش' , '7');
			options[8] = new Option('بستان آباد' , '8');
			options[9] = new Option('بناب' , '9');
			options[10] = new Option('بناب جدید ', '10');
			options[11] = new Option('تبریز' , '11');
			options[12] = new Option('ترک' , '12');
			options[13] = new Option('ترکمانچای' , '13');
			options[14] = new Option('تسوج' , '14');
			options[15] = new Option('تیکمه داش' , '15');
			options[16] = new Option('جلفا' , '16');
			options[17] = new Option('خاروانا' , '17');
			options[18] = new Option('خامنه' , '18');
			options[19] = new Option('خراجو' , '19');
			options[20] = new Option('خسروشهر' , '20');
			options[21] = new Option('خضرلو' , '21');
			options[22] = new Option('خمارلو' , '22');
			options[23] = new Option('خواجه' , '23');
			options[24] = new Option('دوزدوزان' , '24');
			options[25] = new Option('زرنق' , '25');
			options[26] = new Option('زنوز' , '26');
			options[27] = new Option('سراب' , '27');
			options[28] = new Option('سردرود' , '28');
			options[29] = new Option('سهند' , '29');
			options[30] = new Option('سیس' , '30');
			options[31] = new Option('سیه رود' , '31');
			options[32] = new Option('شبستر' , '32');
			options[33] = new Option('شربیان' , '33');
			options[34] = new Option('شرفخانه' , '34');
			options[35] = new Option('شندآباد' , '35');
			options[36] = new Option('صوفیان' , '36');
			options[37] = new Option('عجب شیر' , '37');
			options[38] = new Option('قره آغاج' , '38');
			options[39] = new Option('کشکسرای' , '39');
			options[40] = new Option('کلوانق' , '40');
			options[41] = new Option('کلیبر' , '41');
			options[42] = new Option('کوزه کنان' , '42');
			options[43] = new Option('گوگان' , '43');
			options[44] = new Option('لیلان' , '44');
			options[45] = new Option('مراغه' , '45');
			options[46] = new Option('مرند' , '46');
			options[47] = new Option('ملکان' , '47');
			options[48] = new Option('ملک کیان' , '48');
			options[49] = new Option('ممقان' , '49');
			options[50] = new Option('مهربان' , '50');
			options[51] = new Option('میانه' , '51');
			options[52] = new Option('نظرکهریزی' , '52');
			options[53] = new Option('هادی شهر' , '53');
			options[54] = new Option('هرگلان' , '54');
			options[55] = new Option('هریس' , '55');
			options[56] = new Option('هشترود' , '56');
			options[57] = new Option('هوراند' , '57');
			options[58] = new Option('وایقان' , '58');
			options[59] = new Option('ورزقان' , '59');
			options[60] = new Option('یامچی' , '60');
			options[61] = new Option('اسکو' , '61');
		}
		if(state == 2) {
			options[0] = new Option('\'لطفا شهر را انتخاب نمایید\'', '0');
			options[38] = new Option('اسارا', '222');
			options[1] = new Option('اشتهارد', '223');
			options[2] = new Option('تنکمان', '224');
			options[3] = new Option('چهارباغ', '225');
			options[4] = new Option('سیف آباد', '226');
			options[5] = new Option('شهر جدید هشتگرد', '227');
			options[6] = new Option('طالقان', '228');
			options[7] = new Option('پلدشت', '229');
			options[8] = new Option('کرج', '230');
			options[9] = new Option('تازه شهر', '231');
			options[10] = new Option('کمال شهر', '232');
			options[11] = new Option('کوهسار', '233');
			options[12] = new Option('گرمدره', '234');
			options[13] = new Option('مشکین دشت', '235');
			options[14] = new Option('نظرآباد', '236');
			options[15] = new Option('هشتگرد', '237');
		}
		if(state == 3)
		{
			options[0] = new Option('لطفا شهر را انتخاب نمایید' , '0');
			options[1] = new Option('اردبیل' , '100');
			options[2] = new Option('اصلاندوز' , '101');
			options[3] = new Option('آبی بیگلو' , '102');
			options[4] = new Option('بیله سوار' , '103');
			options[5] = new Option('پارس آباد' , '104');
			options[6] = new Option('تازه کند' , '105');
			options[7] = new Option('تازه کندانگوت' , '106');
			options[8] = new Option('جعفرآباد' , '107');
			options[9] = new Option('خلخال' , '108');
			options[10] = new Option('رضی' , '109');
			options[11] = new Option('سرعین' , '110');
			options[12] = new Option('عنبران' , '111');
			options[13] = new Option('فخرآباد' , '112');
			options[14] = new Option('کلور' , '113');
			options[15] = new Option('کوراییم' , '114');
			options[16] = new Option('گرمی' , '115');
			options[17] = new Option('گیوی' , '116');
			options[18] = new Option('لاهرود' , '117');
			options[19] = new Option('مشگین شهر' , '118');
			options[20] = new Option('نمین' , '119');
			options[21] = new Option('نیر' , '120');
			options[22] = new Option('هشتجین' , '121');
			options[23] = new Option('هیر' , '122');
		}
		if(state == 4)
		{
			options[0] = new Option('لطفا شهر را انتخاب نمایید' , '0');
			options[1] = new Option('ابریشم' , '123');
			options[2] = new Option('ابوزیدآباد' , '124');
			options[3] = new Option('اردستان' , '125');
			options[4] = new Option('اژیه' , '126');
			options[5] = new Option('اصفهان' , '127');
			options[6] = new Option('افوس' , '128');
			options[7] = new Option('انارک' , '129');
			options[8] = new Option('ایمانشهر' , '130');
			options[9] = new Option('آران وبیدگل' , '131');
			options[10] = new Option('بادرود' , '132');
			options[11] = new Option('باغ بهادران ', '133');
			options[12] = new Option('بافران' , '134');
			options[13] = new Option('برزک' , '135');
			options[14] = new Option('برف انبار' , '136');
			options[15] = new Option('بهاران شهر' , '137');
			options[16] = new Option('بهارستان' , '138');
			options[17] = new Option('بوئین و میاندشت' , '139');
			options[18] = new Option('پیربکران' , '140');
			options[19] = new Option('تودشک' , '141');
			options[20] = new Option('تیران' , '142');
			options[21] = new Option('جندق' , '143');
			options[22] = new Option('جوزدان' , '144');
			options[23] = new Option('جوشقان و کامو', '145');
			options[24] = new Option('چادگان' , '146');
			options[25] = new Option('چرمهین' , '147');
			options[26] = new Option('چمگردان' , '148');
			options[27] = new Option('حبیب آباد' , '149');
			options[28] = new Option('حسن آباد' , '150');
			options[29] = new Option('حنا' , '151');
			options[30] = new Option('خالدآباد' , '152');
			options[31] = new Option('خمینی شهر' , '153');
			options[32] = new Option('خوانسار' , '154');
			options[33] = new Option('خور' , '155');
			options[34] = new Option('خورزوق' , '157');
			options[35] = new Option('داران' , '158');
			options[36] = new Option('دامنه' , '159');
			options[37] = new Option('درچه' , '160');
			options[38] = new Option('دستگرد' , '161');
			options[39] = new Option('دهاقان' , '162');
			options[40] = new Option('دهق' , '163');
			options[41] = new Option('دولت آباد' , '164');
			options[42] = new Option('دیزیچه' , '165');
			options[43] = new Option('رزوه' , '166');
			options[44] = new Option('رضوانشهر' , '167');
			options[45] = new Option('زاینده رود' , '168');
			options[46] = new Option('زرین شهر' , '169');
			options[47] = new Option('زواره' , '170');
			options[48] = new Option('زیباشهر' , '171');
			options[49] = new Option('سده لنجان' , '172');
			options[50] = new Option('سفیدشهر' , '173');
			options[51] = new Option('سگزی' , '174');
			options[52] = new Option('سمیرم' , '175');
			options[53] = new Option('شاهین شهر' , '176');
			options[54] = new Option('شهرضا' , '177');
			options[55] = new Option('طالخونچه' , '178');
			options[56] = new Option('عسگران' , '179');
			options[57] = new Option('علویجه' , '180');
			options[58] = new Option('فرخی' , '181');
			options[59] = new Option('فریدونشهر' , '182');
			options[60] = new Option('فلاورجان' , '183');
			options[61] = new Option('فولادشهر' , '184');
			options[62] = new Option('قمصر' , '185');
			options[63] = new Option('قهجاورستان' , 186);
			options[64] = new Option('قهدریجان' , '187');
			options[65] = new Option('کاشان' , '188');
			options[66] = new Option('کرکوند' , '189');
			options[67] = new Option('کلیشاد و سودرجان' , '190');
			options[68] = new Option('کمشچه' , '191');
			options[69] = new Option('کمه' , '192');
			options[70] = new Option('کهریزسنگ' , '193');
			options[71] = new Option('کوشک' , '194');
			options[72] = new Option('کوهپایه' , '195');
			options[73] = new Option('گرگاب' , '196');
			options[74] = new Option('گزبرخوار' , '197');
			options[75] = new Option('گلپایگان' , '198');
			options[76] = new Option('گلدشت' , '199');
			options[77] = new Option('گلشهر' , '200');
			options[78] = new Option('گوگد' , '201');
			options[79] = new Option('لای بید' , '202');
			options[80] = new Option('مبارکه' , '203');
			options[81] = new Option('مجلسی' , '204');
			options[82] = new Option('محمدآباد' , '205');
			options[83] = new Option('مشکات' , '206');
			options[84] = new Option('منظریه' , '207');
			options[85] = new Option('مهاباد' , '208');
			options[86] = new Option('میمه' , '209');
			options[87] = new Option('نائین' , '210');
			options[88] = new Option('نجف آباد' , '211');
			options[89] = new Option('نصرآباد' , '212');
			options[90] = new Option('نطنز' , '213');
			options[91] = new Option('نوش آباد' , '214');
			options[92] = new Option('نیاسر' , '215');
			options[93] = new Option('نیک آباد' , '216');
			options[94] = new Option('هرند' , '217');
			options[95] = new Option('ورزنه' , '218');
			options[96] = new Option('ورنامخواست' , '219');
			options[97] = new Option('وزوان' , '220');
			options[98] = new Option('ونک' , '221');
		}
	}
}