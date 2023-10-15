<div class="tab-pane show active" id="home" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
     background: rgb(255, 255, 255);
     border-radius: 10px;
     box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
     backdrop-filter: blur(9.6px);
     -webkit-backdrop-filter: blur(9.6px);
     border: 1px solid rgba(255, 255, 249, 0.55);">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" class="frm-vector form" enctype="multipart/form-data">
    <section class="home-section d-flex justify-content-center">
        <div class="row p-4 ms-1 me-1">
            <div class="col-lg-6 border-end">
                <form action="{{ route('placeorder')}}" class="frm-vector">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-4 text-end">
                            <label for="" class="text-muted fw-medium">Design Name:</label>
                        </div>
                        <div class="col-auto ">
                            <input type="text" class="form-control" name="design_name">
                            <input type="hidden" value="vector" name="order_type">
                        </div>
                    </div><br>
                    <div class="row g-3 align-items-center">
                        <div class="col-4 text-end">
                            <label for="" class="text-muted fw-medium">Size:</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="size[]">
                        </div>
                    </div><br>
                    <div class="row g-3 align-items-center">
                        <div class="col-4 text-end">
                            <label for="" class="text-muted fw-medium">Colors:</label>
                        </div>
                        <div class="col-auto">
                            <div id="list1" class="inline" tabindex="100">
                                <div class="form-check form-check-inline">
                                    <input id="customRadio1" name="color[]" value="RGB" type="radio" class="form-check-input" checked=""/>
                                    <label class="form-check-label fw-medium text-secondary" for="customRadio1">RGB</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="customRadio3" name="color[]" value="ANTONE SOLID COATED" type="radio" class="form-check-input"/>
                                    <label class="form-check-label fw-medium text-secondary" for="customRadio3">PANTONE SOLID COATED</label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                    <input id="customRadio2" name="color[]" value="CMYK" type="radio" class="form-check-input"/>
                                    <label class="form-check-label fw-medium text-secondary" for="customRadio2">CMYK</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="customRadio4" name="color[]" type="radio" value="ONE COLOR" class="form-check-input"/>
                                    <label class="form-check-label fw-medium text-secondary" for="customRadio4">ONE COLOR</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="customRadio4" name="color[]" type="radio" value="other" class="form-check-input"/>
                                    <label class="form-check-label fw-medium text-secondary" for="customRadio4">OTHER</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-1 align-items-center mt-2">
                        <div class="col-4 text-end">
                            <label for="" class="text-muted fw-medium">Comment:</label>
                        </div>
                        <div class="col-auto">
                            <textarea name="comments" id="" cols="35" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <hr>
                    <label for=""> Note:</label>
                    <ol>
                        <li>All Files are supported.</li>
                        <li>Not more than 10 MB per file.</li>
                        <li>Allowed only three supporting design files</li>
                    </ol>
                </form>
            </div>
            <div class="col-xl-6">
                <div class="row g-3 align-items-center">
                    <div class="">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Drop your vector file</h4>
                            <p class="sub-header">
                                <span class="fw-bold">Note:</span> Allowed file types are jpg, jpeg, png, pdf, svg, gif, bmp, tiff, tif, heic, cnd, vp3, exp, mov, mp4, psd, ai, eps, pds, cdr, dst, pes, vp4, emb, pxf, txt, doc, xls, xIsx
                            </p>  
                                <div class="fallback">
                                    <input name="file[]" type="file" multiple class="vector-files" />
                                </div>

<!--                                <div class="dz-message needsclick">
                                    <i class="h1 text-muted uil-cloud-upload"></i>
                                    <h3>Drop files here or click to upload.</h3>
                                    <span class="text-muted">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                </div>-->
                            <!--</form>-->
                            <div class="clearfix text-end mt-3">
                                <input type="submit"  class="btn btn-danger btn-vector" 
                                       value="Submit"> 
                                     
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                </div>

            </div>
        </div>
    </section>
     </form>
</div>