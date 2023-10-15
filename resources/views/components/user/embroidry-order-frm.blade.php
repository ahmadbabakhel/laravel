<div class="tab-pane" id="home" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
     background: rgb(255, 255, 255);
     border-radius: 10px;
     box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
     backdrop-filter: blur(9.6px);
     -webkit-backdrop-filter: blur(9.6px);
     border: 1px solid rgba(255, 255, 249, 0.55);">
    <form method="post" action="{{ route('placeorder')}}" class="frm-embridry form" enctype="multipart/form-data">
        @csrf
        <div class="row p-4 ms-1 me-1">
        <div class="mb-3 row">
            <label class="col-lg-2 col-form-label" for="simpleinput">Design Name</label>
            <div class="col-lg-4">
                <input type="text" id="input_53"  name="design_name" data-type="input-textbox" 
                       class="form-control" data-defaultvalue="" size="75" value="" placeholder=" " 
                       data-component="textbox" aria-labelledby="label_53" >
                <input type="hidden" value="embroidry" name="order_type"/>
            </div> 
        </div>
        <div class="mb-3 row align-items-start">
            <div class="col-6">
                <label class="col-lg-2 col-form-label" for="simpleinput" style="width: 150px;">Design Size<span class="text-danger">*</span></label>
                <div id="cid_100" class="form-input-wide jf-required">
                    <div class="form-single-column" role="group" aria-labelledby="label_100" data-component="radio">
                        <div class="radio_check">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                                <input type="radio"  class="form-radio validate[required]" id="input_100_0" value="Allow us to choose size that best fits design/placement" name="size[]" value="Allow us to choose size that best fits design/placement" >
                                <label id="label_input_100_0" for="input_100_0">Allow us to choose size that best fits design/placement</label></span>
                        </div>
                        <div class="radio_check">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                                <input type="radio" aria-describedby="label_100" class="form-radio validate[required]" id="input_100_1" name="size[]" value="Specific size (enter exact size)" ><label id="label_input_100_1" for="input_100_1">Specific size (enter exact size)</label></span></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <label class="form-label form-label-top" id="label_55" for="first_55"> Enter Specific Design Size </label>
                <div id="cid_55" class="form-input-wide">
                    <div data-wrapper-react="true">
                        <!-- Input 1 -->
                        <span class="form-sub-label-container" data-input-type="first" style="display: inline-block; vertical-align: top;">
                            <input type="text" class="form-control" id="inlineFormInput" name="width" placeholder="Inches" style="width: 100px;">
                            <!-- <br style="line-height: 13px;"> New line to separate input and label -->
                            <label class="form-sub-label" for="first_55" id="sublabel_55_first" style="min-height: 13px;" aria-hidden="false">Width</label>
                        </span>

                        <!-- Input 2 -->
                        <span class="form-sub-label-container" data-input-type="last" style="display: inline-block; vertical-align: top;">
                            <input type="text" class="form-control" name="height" id="inlineFormInput"  style="width: 100px;">
                            <!-- <br style="line-height: 13px;"> New line to separate input and label -->
                            <label class="form-sub-label" for="last_55" id="sublabel_55_last" style="min-height: 13px;" aria-hidden="false">Height</label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-line jf-required" data-type="control_checkbox" id="id_108">
            <label class="form-label form-label-top form-label-auto" id="label_108" for="input_108">Garment Type<span class="text-danger">*</span></label>
            <div id="cid_108" class="form-input-wide jf-required">
                <div class="form-multiple-column" data-columncount="4" role="group" aria-labelledby="label_108" data-component="checkbox">
                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_0" name="order_garrment_type[]" value="HAT" >
                        <label id="label_input_108_0" for="input_108_0">HAT</label>
                    </span>
                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_1" name="order_garrment_type[]" value="POLO SHIRT" >
                        <label id="label_input_108_1" for="input_108_1">POLO SHIRT</label>
                    </span>
                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_2" name="order_garrment_type[]" value="JACKET" >
                        <label id="label_input_108_2" for="input_108_2">JACKET</label>
                    </span>
                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_3" name="order_garrment_type[]" value="APRON" >
                        <label id="label_input_108_3" for="input_108_3">APRON</label>
                    </span>
                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_4" name="order_garrment_type[]" value="BEANIE" >
                        <label id="label_input_108_4" for="input_108_4">BEANIE</label>
                    </span>
                    <span class="form-checkbox-item form-check-inline">
                        <div class="input-group">
                            <input type="checkbox" aria-describedby="label_108" class="form-checkbox validate[required]" id="input_108_4" name="order_garrment_type[]" value="BEANIE" >
                            <input type="text" name="garmentType_other" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                    </span><br><br>

                </div>
            </div>
        </div>
        <div class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox" id="id_58"><label class="form-label form-label-top" id="label_58" for="input_58"> Garment Color<span class="text-danger">*</span> </label>
            <div id="cid_58" class="form-input-wide jf-required"> <input type="text" id="input_58" name="color[]" data-type="input-textbox" class="form-control validate[required]" style="width:400px;" data-defaultvalue="" size="50" value="" placeholder=" " data-component="textbox" aria-labelledby="label_58" > </div><br>
        </div>
        <div class="form-line jf-required" data-type="control_checkbox" id="id_107"><label class="form-label form-label-top form-label-auto" id="label_107" for="input_107"> Specialty Elements<span class="text-danger">*</span> </label>
            <div id="cid_107" class="form-input-wide jf-required">
                <div class="form-single-column" role="group" aria-labelledby="label_107" data-component="checkbox">

                    <span class="form-checkbox-item" style="clear:left">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_107" class="form-checkbox validate[required]" id="input_107_1" name="specialtyElements[]" value="3D Puff - Standard (please specify 3D elements in notes below)" >
                        <label id="label_input_107_1" for="input_107_1">Richardson Hat</label>
                    </span><br>

                    <span class="form-checkbox-item" style="clear:left">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_107" class="form-checkbox validate[required]" id="input_107_2" name="specialtyElements[]" value="3D Puff - Complex/Motifs/Overlays/Multiple Layers (please specify 3D details in notes below)" >
                        <label id="label_input_107_2" for="input_107_2">Track down stitch</label>
                    </span><br>

                    <span class="form-checkbox-item" style="clear:left">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_107" class="form-checkbox validate[required]" id="input_107_2" name="specialtyElements[]" value="3D Puff - Complex/Motifs/Overlays/Multiple Layers (please specify 3D details in notes below)" >
                        <label id="label_input_107_2" for="input_107_2">3D Puff</label>
                    </span><br>

                    <span class="form-checkbox-item" style="clear:left">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_107" class="form-checkbox validate[required]" id="input_107_4" name="specialtyElements[]" value="Applique-in hoop material cut" >
                        <label id="label_input_107_4" for="input_107_4">Applique</label>
                    </span><br>


                </div>
            </div>
            <br>
        </div>
        <div class="form-line" data-type="control_textarea" id="id_22">
            <label class="form-label form-label-top form-label-auto" id="label_22" for="input_22"> Special Notes </label>
            <div id="cid_22" class="form-input-wide"> <span class="form-sub-label-container" style="vertical-align:top">
                    <textarea id="input_22" class="form-control" style="width: 500px;" name="comments" cols="85" rows="8" data-component="textarea" aria-labelledby="label_22 sublabel_input_22"></textarea><label class="form-sub-label"  style="font-size:10px" for="input_22" id="sublabel_input_22" style="min-height:13px" aria-hidden="false" >Please describe your project with as much info as possible.</label></span> </div>
        </div><br>
        <div class="form-line jf-required" data-type="control_checkbox" id="id_106"><br>
            <label class="form-label form-label-top form-label-auto" id="label_106" for="input_106">Design Format(s)<span class="text-danger">*</span></label>
            <div id="cid_106" class="form-input-wide jf-required">
                <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_106" data-component="checkbox">
                    <span class="form-checkbox-item form-check-inline">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_0" name="designFormats[]" value=".emb(e4.5)" >
                        <label id="label_input_106_0" for="input_106_0">.emb(e4.5)</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_1" name="designFormats[]" value=".emb(Hatch)" >
                        <label id="label_input_106_1" for="input_106_1">.emb(Hatch)</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_2" name="designFormats[]" value=".emb(Ver3)" >
                        <label id="label_input_106_2" for="input_106_2">.emb(Ver3)</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline" style="clear:left">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_3" name="designFormats[]" value=".dst" >
                        <label id="label_input_106_3" for="input_106_3">.dst</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_4" name="designFormats[]" value=".exp" >
                        <label id="label_input_106_4" for="input_106_4">.exp</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline">
                        <span class="dragger-item"></span>
                        <input type="checkbox" aria-describedby="label_106" class="form-checkbox validate[required]" id="input_106_5" name="designFormats[]" value=".pes" >
                        <label id="label_input_106_5" for="input_106_5">.pes</label>
                    </span>

                    <span class="form-checkbox-item form-check-inline">
                        <input type="checkbox" class="form-checkbox-other form-checkbox validate[required]" name="designFormats[other]" id="other_106" value="other" tabindex="0" aria-label="Other">
                        <label id="label_other_106" style="text-indent:0" for="other_106">&nbsp;</label>
                        <input type="text" class="form-checkbox-other-input form-textbox" name="designFormats[other]" data-otherhint="Other" size="15" id="input_106" placeholder="Other">
                        <br><br>
                    </span>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Drop your vector file</h4>
                <p class="sub-header">
                    <span class="fw-bold">Note:</span> Allowed file types are jpg, jpeg, png, pdf, svg, gif, bmp, tiff, tif, heic, cnd, vp3, exp, mov, mp4, psd, ai, eps, pds, cdr, dst, pes, vp4, emb, pxf, txt, doc, xls, xIsx
                </p> 
                    <div class="fallback">
                        <input name="file[]" type="file" multiple />
                    </div>

<!--                    <div class="dz-message needsclick">
                        <i class="h1 text-muted uil-cloud-upload"></i>
                        <h3>Drop files here or click to upload.</h3>
                        <span class="text-muted">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                    </div> -->
            </div> <!-- end card-body -->
        </div>
        <div class="col-md-auto mb-3">
            <input type="submit" class="btn btn-danger btn-emboridry" value="Submit"/>
            <button type="submit" class="btn btn-danger">Clear</button>
        </div>
    </div>    
    </form>    
</div>