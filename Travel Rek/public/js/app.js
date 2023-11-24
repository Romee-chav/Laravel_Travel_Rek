
        (function() {
            var today = new Date();
            var tomorrow = new Date();
            tomorrow.setDate(tomorrow.getDate() + 1);
            var input1 = document.querySelector('#demo1-input-parent input');
            input1.value = fecha.format(today, 'YYYY-MM-DD') + ' / ' + fecha.format(tomorrow, 'YYYY-MM-DD');
            var demo1 = new HotelDatepicker(input1);
        })();
    </script>
        function totalgpamt() {
            var mealss = $('#meals').html();
            //            var mealss ;
            var tour = $('#travels').html();
            var totalgppp = 0;
            totalpax = 0;
            if (totalperson == 0) {
                totalpax += (parseFloat(1)); //totalperson
                $('#personcount1').val(1);
                $('#pax').html(totalpax);
            } else {
                $('#pax').html(totalperson);
                totalpax += (parseFloat(totalperson));
            }
            var lunchamt = $('#lunchamt :selected').val();
            var dinneramt = $('#dinner :selected').val();
            var totalrooms = $('#rooms :selected').val();
            var totaldays = $('#no_nights').html() <= 0 ? $('#no_nights').html(1) : $('#no_nights').html();
            //            $('#invoice_id').html(totalpax); ////test


            /*******Meals Amt******/
            subtotalmeals = 0;
            totalmeals = 0;
            subtotalmeals += (parseFloat(lunchamt) + parseFloat(dinneramt)) * parseFloat(totalpax);
            totalmeals += (parseFloat(subtotalmeals));

            //            var extraIntertransfer = $('#inter').is(":checked") ? $("input[name=extratransfer]:checked").val() : 0;
            //            var extraCruisetransfer = $('#cruise').is(":checked") ? $("input[name=extraCruisetransfer]:checked").val() : 0;
            //            var getprivate_tour_amount = $(this).find('.private_tour_amount').val();
            //            totalgppp += parseFloat(totalmeals )+ parseFloat(extraIntertransfer)+parseFloat(extraCruisetransfer)+ parseFloat(getprivate_tour_amount);
            //            $('#totalgp').html(totalgppp);
            //            if(getprivate_tour_amount==0|| getprivate_tour_amount== null || getprivate_tour_amount==undefined){
            //
            //                totalgppp += parseFloat(totalmeals )+ parseFloat(extraIntertransfer)+parseFloat(extraCruisetransfer)+ parseFloat(getprivate_tour_amount);
            //                $('#totalgp').html(totalgppp);
            //            }else{
            totalgppp += parseFloat(totalmeals) + parseFloat(tour);
            $('#totalgp').html(totalgppp);
            //            }


        }

        function abz() {
            $('.loader').css('display', 'block');
            /* debugger;*/
            $("#show12").hide();
            //AppendTourDiv();
            $('#travels').html('0');
            $('#travels').html();
            $('.travels_amt').text();
            // alert($('.travels_amt').text());
            $('#travels').children().remove();
            $('.tour_checkbox').prop('checked', true);
            $('.tour_checkbox').prop('checked', false);
            $('#total_transfer').prop('checked', true);
            $('#total_transfer').prop('checked', false);


            //alert('dsadsa');
            AppendTourDiv();
            finalcalculation();

        }

        function change_cnb() {

        }

        function ccc() {

            finalcalculation();
        }

        function TourDatePick(dis) {
            var val = $(dis).val();
            if (val.length > 0) {
                $(dis).next().hide();
                $(dis).parent().find('.tour_checkbox').prop('checked', 'checked');
                //AppendTourDiv();
            } else {
                $(dis).next().show();
                $(dis).parent().find('.tour_checkbox').prop('checked', false);
            }
            AppendTourDiv();
        }

        function AppendTourDiv() {
            // debugger;
            $('#append_tour').html('');
            $('#selectedPkgs').html('');
            var checktotal_append = 0;
            $('.tours_selection_row').each(function() {
                if ($(this).find('input[type="checkbox"]').prop("checked") == true) {
                    var gettour_name = $(this).find('.tour_name').text();
                    var gettour_date = $(this).find('.date_tour').val();
                    var gettour_id = $(this).find('.tour_id').val();
                    var getsic_tour_amount = $(this).find('.sic_tour_amount').val();
                    var getprivate_tour_amount = $(this).find('.private_tour_amount').val();
                    var append_div = '<div class="selected_tour_row"><div class="selectedtour_name">' +
                        gettour_name + '</div>' +
                        '<input type="hidden" class="tour_id" value="' + gettour_id + '"/>' +
                        '<input type="hidden" class="tour_date" value="' + gettour_date + '"/>' +
                        '<input type="hidden" class="sic_tour_amount" value="' + getsic_tour_amount + '"/>' +
                        '<input type="hidden" class="private_tour_amount" value="' + getprivate_tour_amount +
                        '"/>' +
                        '<div class="selectedtour_date"><div class="form-control append_date">' + gettour_date +
                        '</div>' +
                        '</div></div>';
                    checktotal_append += 1;

                    // console.log($(this).find('.tour_id').val()+" <= and name => "+$(this).find('.tour_name').text());
                    var appendRow = `<tr>
                                        <td colspan="2" class="width_35 p-2 title-pkg">&check; &nbsp; ${gettour_name}</td>
                                    </tr>`;

                    // console.log(gettour_name);
                    // console.log(getprivate_tour_amount);




                } else {
                    $(this).find('.date_tour').val('');
                    $(this).find('.overlay_checkbox').show();
                }
                $('#append_tour').append(append_div);

                $('#selectedPkgs').append(appendRow);
                // console.log(appendRow);


            });
            finalcalculation();
            var $content = $("#append_tour"),
                $elements = $(".selected_tour_row");
            var elements = Tour_Sortbydate($elements, "ASC"); //DESC---- For Use Descending date filter
            var html = "";
            for (var i = 0; i < elements.length; ++i) {
                html += elements[i].html;
            }
            $content[0].innerHTML = html;
            return false;
        }

        function Tour_Sortbydate(elements, order) {
            var arr = [];
            elements.each(function() {
                var obj = {},
                    $el = $(this),
                    time = $el.find(".append_date").text(),
                    date = new Date($.trim(time)),
                    timestamp = date.getTime();
                obj.html = $el[0].outerHTML;
                obj.time = timestamp;
                arr.push(obj);
            });
            var sorted = arr.sort(function(a, b) {
                if (order == "ASC") {
                    return a.time > b.time;
                } else {
                    return b.time > a.time;
                }
            });
            return sorted;
        }
    </scr>
        function show_guest_popup() {
            $('#guest_popup').addClass('show_popup');
        }

        function HidePopup() {
            $('#guest_popup').removeClass('show_popup');
        }
        $(function() {
            $("#datepicker").datepicker();
        });
        $(function() {
            $(".date_tour").datepicker();
        });
        //        $(function () {
        //            $("#datepicker1").datepicker(
        //                onSelect: function () {
        //                datedifference();
        //            }
        //            );
        //        });
        $("#datepicker1").datepicker({
            onSelect: function() {
                datedifference();
            }
        });

        $(document).ready(function() {
            datedifference();
            changeperson();

            var checkbox = false;
            $('.top_menu_popup_click').click(function(event) {
                // event.preventDefault();
                event.stopPropagation();
                var chkopen = $(this).find('.login_popup').attr('class');
                if (chkopen == 'login_popup scale0') {
                    if (!checkbox) {
                        if (chkopen == 'login_popup scale0') {
                            $('.login_popup').addClass('scale0');
                            $(this).find('.login_popup').removeClass('scale0');
                            checkbox = true;
                        } else {
                            $('.login_popup').addClass('scale0');
                            checkbox = false;
                        }
                    }
                }
            });
            $(document).click(function(event) {
                // event.preventDefault();
                event.stopPropagation();
                $('.login_popup').addClass('scale0');
                checkbox = false;
            });

            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function() {

                // console.log(this);
                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                //$('.row-service').find('input[type="checkbox"]').prop('checked', false);
                $('#travel_block').find('input[type="radio"]').prop('checked', false);
                changeperson();

            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                        105)) {
                    e.preventDefault();
                }
            });
            $('#Agency_Name').keyup(function() {
                $('#ag_name').text($(this).val());
            });
            $('#txtGuestName').keyup(function() {
                $('#showguest_name').text($(this).val());
            });
            $('#guestMobileNo').keyup(function() {
                $('#showGuestMobileNo').text($(this).val());
            });
            // $('#selectnight').change(function() {
            //     $('#no_nights').text($(this).val());
            // });

            $('#guestHotel').change(function() {
                let guestHotel = $('#guestHotel :selected').text();
                $('#showGuestHotel').text(guestHotel);
                var a = $('#guestHotel').val();
                // console.log(a);
                getHotelPrice();

            });

            $('#guestHotel').change(function() {
                let guestHotel = $('#guestHotel :selected').text();
                $('#showGuestHotel').text(guestHotel);
                var a = $('#guestHotel').val();
                // console.log(a);
                getHotelPrice();

            });

            ttCheck();
            $("input:radio[name=ttransfer][value=Sic]").prop('checked', true); // tt check private

        });

        function ttCheck() {

            var ttransferChk = $("input[name=ttransfer]:checked").val(); // tt check sic/private

            if (ttransferChk == "Private") {
                $('#grandtotalAmt').css("border", "2px solid orange");
            } else {
                $('#grandtotalAmt').css("border", "2px solid green");
            }
            finalcalculation();

        }

        function CheckEnableDisableTextBox(dis) {
            //            finalcalculation();
            var getchkid = $(dis).attr('id');
            var chkclickevent = $(dis).prop("checked");

            if (getchkid == "selecthotel") {
                if (chkclickevent == false) {
                    $('#block_hotel').find(".disable_layer").show();
                    $('#block_hotel').find('input[type="radio"]').prop('checked', false);
                } else {
                    $('#block_hotel').find(".disable_layer").hide();
                }
            } else if (getchkid == "chktourtraval") {
                if (chkclickevent == false) {
                    $('#travel_block').find(".disable_layer").show();
                    $('#tourtrans_id').find(".disable_layer").show();
                    $('#travel_block').find('input[type="radio"]').prop('checked', false);
                } else {
                    $('#travel_block').find(".disable_layer").hide();
                    $('#tourtrans_id').find(".disable_layer").hide();
                }
            } else if (getchkid == "chkmeals") {
                if (chkclickevent == false) {
                    $('#meal_block').find(".disable_layer").show();
                    $('#meal_block').find('input[type="checkbox"]').prop('checked', false);
                } else {
                    $('#meal_block').find(".disable_layer").hide();
                }
            }
        }

        /**********Bijendra**********/
        function changeperson() {
            // debugger;
            var per1 = $('#personcount1').val();
            var per2 = $('#personcount2').val();

            var all = parseInt(per1) + parseInt(per2);

            $.ajax({
                type: "post",
                url: "https://agent.sivaste.com/Allair",
                data: "all= " + all,
                success: function(data) {
                    var my = $.parseJSON(data);
                    $('#Private').val(my[1]);
                    $('#SIC').val(my[0]);
                    // alert(my[1]);
                    // console.log(data);
                    $('.loader').css('display', 'none');
                }
            });

            console.log(all);

            $('._ttid').hide();
            $('.ttid_' + all).show();

            //            alert(all);
            $('#pax').val(all);
            if (all > 0)
                finalcalculation();
        }
        $('#block_hotel').click(function() {
            finalcalculation();
        });
        var totaltour;

        /**********finalcalculation**********/
        function finalcalculation() {
            // debugger;
            var per1 = $('#personcount1').val();
            var per2 = $('#personcount2').val();
            totalperson = 0;
            totalperson += (parseFloat(per1) + parseFloat(per2)); //totalperson
            if (per2 == 8) {
                $("#cnb").attr('disabled', true);
            } else {
                $("#cnb").attr('disabled', false);
            }

            if (totalperson == 16) {
                $(".ddd").attr('disabled', false);

            } else if (totalperson == 15) {
                $(".ddd").show();
            }

            if (per1 == 4 || per1 == 2 && per2 == 3 || per1 == 3 && per2 == 2 || totalperson == 5) {
                if ($("#rooms").val() < 2) {
                    $("#rooms").val('2');
                }
            }

            if (per1 == 7 || per1 == 4 && per2 == 6 || per1 == 6 && per2 == 4 || totalperson == 9) {
                if ($("#rooms").val() < 3) {
                    $("#rooms").val('3');
                }
            }

            if (per1 == 10 || per1 == 6 && per2 == 9 || per1 == 9 && per2 == 6 || totalperson == 13) {
                if ($("#rooms").val() < 4) {
                    $("#rooms").val('4');
                }
            }
            if (per1 == 13 || per1 == 8 && per2 == 12 || per1 == 12 && per2 == 8 || totalperson == 17) {
                if ($("#rooms").val() < 5) {
                    $("#rooms").val('5');
                }
            }
            if (per1 == 16 || per1 == 10 && per2 == 15 || per1 == 15 && per2 == 10 || totalperson == 21) {
                if ($("#rooms").val() < 6) {
                    $("#rooms").val('6');
                }
            }


            totalpax = 0;
            if (totalperson == 0) {
                totalpax += (parseFloat(1)); //totalperson
                $('#personcount1').val(2);
                $('#pax').html(totalpax);
            } else {
                $('#pax').html(totalperson);
                totalpax += (parseFloat(totalperson));
            }
            // var lunchamt = $('#lunchamt :selected').val();
            // var dinneramt = $('#dinner :selected').val();
            var lunchamt = 0;
            var dinneramt = 0;
            var totalrooms = $('#rooms :selected').val();
            var totaldays = $('#no_nights').html() <= 0 ? $('#no_nights').html(1) : $('#no_nights').html();
            // $('#invoice_id').html(totalpax); ////test


            /*******Meals Amt******/
            subtotalmeals = 0;
            totalmeals = 0;
            subtotalmeals += (parseFloat(lunchamt) + parseFloat(dinneramt)) * parseFloat(totalpax);
            totalmeals += (parseFloat(subtotalmeals));
            /*******Meals Amt******/

            var hotelamt = 0;
            // if ($("input[name=hotel]:checked").val() != null) {
            //     hotelamt = $("input[name=hotel]:checked").val();
            // }
            if ($("#guestHotel :selected").val() != null) {
                hotelamt = $("#guestHotel :selected").val();
            }
            var hotelextrarent = 0;
            if ($("#hotelextrarent").val() != null) {
                hotelextrarent = $("#hotelextrarent").val();
            }
            var hotelChildrent = 0;
            if ($("#hotelChildrent").val() != null) {
                hotelChildrent = $("#hotelChildrent").val();
            }
            var airportamt = 0;
            if (($("input[name=airport]:checked").val()) != null) {
                airportamt = $("input[name=airport]:checked").val();
            }

            var extraIntertransfer = $('#inter').is(":checked") ? $("input[name=extratransfer]:checked").val() : 0;
            var extraCruisetransfer = $('#cruise').is(":checked") ? $("input[name=extraCruisetransfer]:checked").val() : 0;


            /*******Hotel Amt******/
            var occu = totalrooms * 2;
            Totalhotelamt = 0;
            extraper = 0;
            //alert(per2);
            //            Totalhotelamt += (parseFloat(totalpax) * parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
            if (per1 > occu) {
                extraper += (parseFloat(per1) - parseFloat(occu));
                Totalhotelamt += (parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
                Totalhotelamt += (parseFloat(hotelextrarent) * parseFloat(extraper) * parseFloat(totaldays));

                //alert(hotelextrarent);
            } else if (per1 <= occu) {
                Totalhotelamt += (parseFloat(hotelamt) * parseFloat(totalrooms) * parseFloat(totaldays));
                // console.log(Totalhotelamt,hotelamt,totalrooms,totaldays);

            }
            if (per2 > 0) {
                Totalhotelamt += parseFloat(per2) * parseFloat(hotelChildrent) * parseFloat(totaldays);

            }

            //if ($('#pcount').val() % 5 != 0)
            /*******Hotel Amt******/


            /*******Tour Amt******/
            TotalTouramt = 0;
            TotalTouramt += (parseFloat(totalpax) * parseFloat(airportamt) + parseFloat(extraIntertransfer) + parseFloat(
                extraCruisetransfer));
            /*******Tour Amt******/


            /*******FinalAdd******/
            $('#hotel').html(Totalhotelamt);
            $('#meals').html(totalmeals);
            $('#travels').html(TotalTouramt);
            $('#showRooms').html(totalrooms);
            $('#showpersoncount1').html(per1);
            $('#showpersoncount2').html(per2);
            $('.selected_tour_row').each(function() {
                var gettour_id = $(this).find('.tour_id').val();
                var getsic_tour_amount = $(this).find('.sic_tour_amount').val();
                var getprivate_tour_amount = $(this).find('.private_tour_amount').val();
                var ttransfer = $("input[name=ttransfer]:checked").val(); // tt check sic/private
                var ttamt = $('#travels').html();
                var rrmeals = $('#meals').html();
                myTotalTouramt = 0;
                if (ttransfer == 'Sic') {
                    myTotalTouramt += (parseFloat(getsic_tour_amount) + parseFloat(ttamt));
                    $('#travels').html(myTotalTouramt);
                    // console.log("s");

                } else {
                    myTotalTouramt += (parseFloat(getprivate_tour_amount) + parseFloat(ttamt));
                    $('#travels').html(myTotalTouramt);
                }
                $('#ttr_id').append($("<option/>", {
                    value: gettour_id,
                    text: gettour_id
                }));

                // console.log(gettour_id);
            });
            //            totalgp();
            // totalgpamt();
            /*******FinalAdd******/

            /*******FinalAmtWithGst******/
            totalAmount = 0;
            gstamt = 0;
            withgstamt = 0;
            mytravel = $('#travels').html();
            var gstper = $('#gstper :selected').val();

            totalAmount += (parseFloat(Totalhotelamt) + parseFloat(totalmeals) + parseFloat(mytravel)); //totalperson
            gstamt += (totalAmount * parseFloat(gstper) / 100);

            // console.log(totalAmount);
            $('#gstamt').val(gstamt);
            $('#grandtotalAmt').val(totalAmount);
            $('#netamount').val((parseFloat(totalAmount) + parseFloat(gstamt)));
            /*******FinalAmtWithGst******/

            if (totalAmount > 0) {
                $("#submitbtn").removeAttr("disabled");
            }


        }
        /**********finalcalculation**********/

        /****Get Guest Name*****/
        // function guestname() {
        //     var edValue = document.getElementById("txtGuestName");
        //     var s = edValue.value;
        //     $('#showguest_name').html(s);
        // }
        /****Get Guest Name*****/

        /****Get Date Diff*****/
        function datedifference() {
            var dateval11 = $('#datepicker3').val();
            //alert(dateval11);

            var array = dateval11.split('/');
            var start = array[0];
            var end = array[1];
            var date1 = new Date(array[0]);
            var date2 = new Date(array[1]);
            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
            var days = Math.ceil(timeDiff / (1000 * 3600 * 24));
            //alert(days);
            /*alert(start);
             alert(total);*/
            var month1 = date1.toLocaleString('default', {
                month: 'short'
            });
            var month2 = date2.toLocaleString('default', {
                month: 'short'
            });
            //  console.log(start+end);
            var day1 = date1.getDate();
            var day2 = date2.getDate();

            /*alert(start);
             alert(end);*/
            /* var start = $("#datepicker").datepicker("getDate");
             var end = $("#datepicker1").datepicker("getDate");*/
            /*var date1 = fecha.format(start, 'YYYY-DD-MM');
             //var date2 = fecha.format(end, 'YYYY-DD-MM');*/
            //var days = (end - start) / (1000 * 60 * 60 * 24);
            $('#no_nights').html(Math.round(days));
            if (month1 == month2) {
                $('#showMonth').text(month1 + ": " + day1 + "-" + day2);

            } else {
                $('#showMonth').text(month1 + "-" + month2 + ": " + day1 + "-" + day2);
            }

            finalcalculation();

        }



        /****Get Date Diff*****/

        /****Get Hotel Name*****/
        function gethotelname(dis) {
            var hotel_name = dis;
            $('#showGuestHotel').text(hotel_name);
            // console.log(hotel_name);
        }
        /****Get Hotel Name*****/

        function getPaymentAmount(dis) {
            var hotel_total = $('#hotel').html();
            var netamount = $('#netamount').val();
            payment = 0;
            payment += (parseFloat(hotel_total) + (parseFloat(netamount) * 30 / 100));
            var pay = $("input[name=paymentfinal]:checked").val();
            if (dis == 'partial')
                $('#paybleamt').val(payment); ////////////////////////////////////////////
            else
                $('#paybleamt').val(netamount);
        }


        function getHotelPrice() {


            /* var per2 = $('#personcount2').val();
             var crent=  $("#hotelChildrent").val();
             var hotelji = $('#hotel').html();
             //alert(hotelji);
             var totalChildrent= per2*crent;

             var ttall=parseInt(hotelji)+parseInt(totalChildrent);
             // alert(ttall);
             $('#hotelall').html(ttall);*/

            let hotel = $('#guestHotel :selected').attr("id");
            var hotelid = hotel.replace(/[^0-9]/g, '');
            // console.log(hotelid);

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "https://agent.sivaste.com/getDubaiHotelPrice",
                //                data: '{"data":"' + endid + '"}',
                data: '{"hotelid":"' + hotelid + '"}',
                success: function(data) {
                    $('#hotelextrarent').val(data.extra);
                    $('#hotelChildrent').val(data.child);
                    finalcalculation();
                    // console.log(data);

                    //                    console.log(data);
                },
                error: function(xhr, status, error) {
                    //                    alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });
        }


        /****Submit*****/
        function finalsubmit() {
            $('.loader').css('display', 'block');
            var dateval11 = $('#datepicker3').val();
            //alert(dateval11);
            var RealinvoiceId = $('#lolz').val();
            //alert(aadi);

            var array = dateval11.split('/');
            var checkdatepicker = array[0];
            var checkdatepicker2 = array[1];
            //alert(checkdatepicker);

            //alert(checkdatepicker2);

            var guest_name = $('#showguest_name').html();
            var checkin = $('#CheckIn').val(); //Arrivalflight
            var checkout = $('#Checkout').val(); //Arrivalflight
            /*  var checkdatepicker = $('#datepicker').val();
             var checkdatepicker2 = $('#datepicker1').val();*/
            var totalrooms = $('#rooms :selected').val(); //total rooms
            var totaldays = $('#no_nights').html(); //total days
            var pax = $('#pax').html();
            var personcount1 = $('#personcount1').val(); //adult
            var personcount2 = $('#personcount2').val(); //child
            // var hotel = $("input[name=hotel]:checked").attr("id");
            var hotel = $("#guestHotel :selected").attr("id");
            var hotelid = hotel.replace(/[^0-9]/g, '');
            var meallunch = $('#lunchamt :selected').text();
            var mealdinner = $('#dinner :selected').text();
            var meallunchcount = meallunch.replace(/[^0-9]/g, '');
            var mealdinnercount = mealdinner.replace(/[^0-9]/g, '');
            var airport_transfer_type = $("input[name=airport]:checked").attr("id");
            var interhotel = $('#inter').is(":checked") ? 1 : 0;
            var cruisetransfer = $('#cruise').is(":checked") ? 1 : 0;
            var tour_type = $("input[name=ttransfer]:checked").val();
            var mobileNo = $("#guestMobileNo").val();

            tour_ids = new Array();
            //alert(tour_ids);
            tour_dates = new Array();
            $('.selected_tour_row').each(function() {
                var gettour_id = $(this).find('.tour_id').val();
                //alert(tour_ids);
                var gettour_date = $(this).find('.tour_date').val();
                tour_ids.push(gettour_id);
                tour_dates.push(gettour_date);
                //                tour_ids.push({gettour_id: gettour_id, gettour_date: gettour_date});

            });

            var tids = tour_ids;
            console.log(tids);
            var tour_date = tour_dates;
            //            alert(tids);
            //            alert(tour_date);
            //            var tdates = tour_dates;
            // console.log(tids);

            /////total
            var hotel_total = $('#hotel').html();
            var meals_total = $('#meals').html();
            var tour_total = $('#travels').html();
            var gstper = $('#gstper :selected').val();
            var gstamt = $('#gstamt').val();
            var grand_total = $('#grandtotalAmt').val();
            var netamount = $('#netamount').val();

            $.ajax({
                type: "POST",
                contentType: "application/json; charset=utf-8",
                url: "https://agent.sivaste.com/postQtn-dubai",
                //                data: '{"data":"' + endid + '"}',
                data: '{"guest_name":"' + guest_name + '", "arr_flight":"' + checkin + '", "dept_flight":"' +
                    checkout + '", "chkin":"' + checkdatepicker + '", "chkout":"' + checkdatepicker2 +
                    '", "totaldays":"' + totaldays + '", "roomno":"' + totalrooms + '", "totaladults":"' +
                    personcount1 + '", "totalchilds":"' + personcount2 + '", "hotelid":"' + hotelid +
                    '" , "mealdinnercount":"' + mealdinnercount + '", "meallunchcount":"' + meallunchcount +
                    '", "airport_transfer_type":"' + airport_transfer_type + '", "interhotel":"' + interhotel +
                    '", "cruisetransfer":"' + cruisetransfer + '", "tour_type":"' + tour_type +
                    '", "hotel_total":"' + hotel_total + '", "meals_total":"' + meals_total + '", "tour_total":"' +
                    tour_total + '", "gstperc":"' + gstper + '", "gst_total":"' + gstamt + '", "grand_total":"' +
                    grand_total + '", "net_total":"' + netamount + '", "tour_ids":"' + tids + '", "tdates":"' +
                    tour_date + '", "RealinvoiceId":"' + RealinvoiceId + '" , "mobileNo":"' + mobileNo + '" }',
                success: function(data) {
                    // console.log(data);
                    // send whatsapp msg api 
                    if (mobileNo) {
                        sendWhatsapp(mobileNo, guest_name, totaldays, totalrooms, grand_total, checkdatepicker,
                            checkdatepicker2, personcount1, personcount2);
                        ShowSuccessPopupMsg('Qoutation has been generated and sended to your whatsapp...');
                    } else {
                        ShowSuccessPopupMsg('Qoutation has been generated...');
                    }
                    setTimeout(function() {
                        window.location.href = "https://agent.sivaste.com/qtn-dubai"
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    //  alert('xhr.responseText');
                    $('#err').html(xhr.responseText);
                }
            });




        }
        /****Submit*****/

        /**********Bijendra**********/
        function sendWhatsapp(mobileNo, guest_name, totaldays, totalrooms, grand_total, checkdatepicker, checkdatepicker2,
            personcount1, personcount2) {

            var gettour_name = "";
            $('.tours_selection_row').each(function() {
                if ($(this).find('input[type="checkbox"]').prop("checked") == true) {
                    gettour_name += ((gettour_name) ? "\n" : "") + $(this).find('.tour_name').text();
                }

            });

            var guestHotelsel = $('#guestHotel :selected').text().trim();
            // console.log(guestHotelsel);

            // send whatsapp msg api 
            var sendInfo = {
                number: 91 + mobileNo,
                type: "text",
                message: `Dear *${guest_name}* \n \nYour quatation total price: *$${grand_total}*, \n \nFrom Date: *${checkdatepicker} to ${checkdatepicker2}*, \n \nHotel: *${guestHotelsel}* , \nTotal Nights: *${totaldays}*, \nTotal rooms: *${totalrooms}*, \nNumber of person's:  *${personcount1}* Adult and *${personcount2}* child, \n \ninclusions are -: \n${gettour_name} `,
                instance_id: "6406DC1B5F550",
                access_token: "43e5e2d6cf0bd6516812e8f1692d3630"
            };
            $.ajax({
                type: "POST",
                crossDomain: true,
                dataType: "jsonp",
                url: "https://app.fivemojo.com/api/send.php",
                data: sendInfo,
                success: function(data) {
                    // console.log();
                },
                error: function(xhr, status, error) {
                    // $('#err').html(xhr.responseText);
                    // console.log(xhr);
                }
            });

        }
    </scrip>
    < type="text/javascript">
        function show_guest_popup() {
            $('#guest_popup').addClass('show_popup');
        }

        function HidePopup() {
            $('#guest_popup').removeClass('show_popup');
        }
        $(function() {
            $("#datepicker").datepicker();
        });
        $(function() {
            $(".form-margin").datepicker();
            $(".date_tour").datepicker();
        });

        $(document).ready(function() {
            var checkbox = false;
            $('.top_menu_popup_click').click(function(event) {
                // event.preventDefault();
                event.stopPropagation();
                var chkopen = $(this).find('.login_popup').attr('class');
                if (chkopen == 'login_popup scale0') {
                    if (!checkbox) {
                        if (chkopen == 'login_popup scale0') {
                            $('.login_popup').addClass('scale0');
                            $(this).find('.login_popup').removeClass('scale0');
                            checkbox = true;
                        } else {
                            $('.login_popup').addClass('scale0');
                            checkbox = false;
                        }
                    }
                }
            });
            $(document).click(function(event) {
                // event.preventDefault();
                event.stopPropagation();
                $('.login_popup').addClass('scale0');
                checkbox = false;
            });

            $('.btn-number').click(function(e) {
                e.preventDefault();
                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });
            $('.input-number').focusin(function() {
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function() {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function(e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                        105)) {
                    e.preventDefault();
                }
            });
            $('#Agency_Name').keyup(function() {
                $('#ag_name').text($(this).val());
            });
            $('#txtGuestName').keyup(function() {
                $('#showguest_name').text($(this).val());
            });
            $('#selectnight').change(function() {
                debugger;
                $('#no_nights').text($(this).val());
            });
        })

        function CheckEnableDisableTextBox(dis) {
            var getchkid = $(dis).attr('id');
            var chkclickevent = $(dis).prop("checked");

            if (getchkid == "selecthotel") {
                if (chkclickevent == false) {
                    $('#block_hotel').find(".disable_layer").show();
                    $('#block_hotel').find('input[type="radio"]').prop('checked', false);
                } else {
                    $('#block_hotel').find(".disable_layer").hide();
                }
            } else if (getchkid == "chktourtraval") {
                if (chkclickevent == false) {
                    $('#travel_block').find(".disable_layer").show();
                    $('#travel_block').find('input[type="checkbox"]').prop('checked', false);
                } else {
                    $('#travel_block').find(".disable_layer").hide();
                }
            } else if (getchkid == "chkmeals") {
                if (chkclickevent == false) {
                    $('#meal_block').find(".disable_layer").show();
                    $('#meal_block').find('input[type="checkbox"]').prop('checked', false);
                } else {
                    $('#meal_block').find(".disable_layer").hide();
                }
            }
        }