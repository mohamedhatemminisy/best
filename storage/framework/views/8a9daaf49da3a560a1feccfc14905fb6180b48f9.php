<?php if(count($data->realEstate) > 0): ?>

    <div class="col-12 form-group">
        <br>
        <h3>
            <?php echo app('translator')->get('receipts.real_state_info'); ?>
        </h3>
        <hr>
    </div>
    <?php $__currentLoopData = $data->realEstate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="clone_real_estate">
            <div class="row">

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.real_estate_types'); ?> </label>
                    <select class="form-control real_estate_typess" name="real_estate_typess[]" id='real_estate_types'>
                        <option disabled selected><?php echo app('translator')->get('receipts.real_estate_types'); ?></option>
                        <?php $__currentLoopData = $real_estate_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($real_estate_type->id); ?>" <?php if($estate->real_estate_type_id == $real_estate_type->id): ?> selected <?php endif; ?>>
                                <?php echo e($real_estate_type->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['real_estate_types'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.real_estate_status'); ?> </label>
                    <select class="form-control" name="real_estate_statuss[]" id='real_estate_status'>
                        <option disabled selected><?php echo app('translator')->get('receipts.real_estate_status'); ?></option>
                        <?php $__currentLoopData = $real_estate_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate_stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($real_estate_stat->id); ?>" <?php if($estate->real_estate_status_id == $real_estate_stat->id): ?> selected <?php endif; ?>>
                                <?php echo e($real_estate_stat->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['real_estate_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.planned_num'); ?> </label>
                    <input type="text" name="real_planned_nums[]" id="planned_num"
                        placeholder="<?php echo app('translator')->get('receipts.planned_num'); ?>" class="form-control"
                        value="<?php echo e(old('real_planned_nums.0', $estate->planned_num)); ?>">
                    <?php $__errorArgs = ['planned_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.piece_num'); ?> </label>
                    <input type="text" name="real_piece_nums[]" id="piece_num" placeholder="<?php echo app('translator')->get('receipts.piece_num'); ?>"
                        class="form-control" value="<?php echo e(old('real_piece_nums.0', $estate->piece_num)); ?>">
                    <?php $__errorArgs = ['piece_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.city'); ?> </label>
                    <select class="form-control" name="real_city_id[]" id='city'>
                        <option disabled selected><?php echo app('translator')->get('receipts.city'); ?></option>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($city->id); ?>" <?php if($estate->real_city_id == $city->id): ?> selected <?php endif; ?>>
                                <?php echo e($city->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.district'); ?> </label>
                    <input type="text" name="real_districts[]" id="district" placeholder="<?php echo app('translator')->get('receipts.district'); ?>"
                        class="form-control" value="<?php echo e(old('real_districts.0', $estate->district)); ?>">
                    <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.owner_num'); ?> </label>
                    <input type="text" name="real_owner_nums[]" id="owner_num" placeholder="<?php echo app('translator')->get('receipts.owner_num'); ?>"
                        class="form-control" value="<?php echo e(old('real_owner_nums.0', $estate->owner_num)); ?>">
                    <?php $__errorArgs = ['owner_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.rate_num'); ?> </label>
                    <input type="text" name="real_rate_nums[]" id="rate_num" placeholder="<?php echo app('translator')->get('receipts.rate_num'); ?>"
                        class="form-control" value="<?php echo e(old('real_rate_nums.0', $estate->rate_num)); ?>">
                    <?php $__errorArgs = ['rate_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_type'); ?> </label>
                    <select class="form-control" name="real_license_type_id[]" id='real_license_type_id'>
                        <option disabled selected><?php echo app('translator')->get('receipts.license_type'); ?></option>
                        <?php $__currentLoopData = $license_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($license_type->id); ?>" <?php if($estate->real_license_type_id == $license_type->id): ?> selected <?php endif; ?>>
                                <?php echo e($license_type->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['real_license_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_issue_date'); ?> </label>
                    <input type="text" name="real_license_issue_dates[]" id="license_issue_date"
                        placeholder="<?php echo app('translator')->get('receipts.license_issue_date'); ?>" class="form-control"
                        value="<?php echo e(old('real_license_issue_dates.0', $estate->license_issue_date)); ?>">
                    <?php $__errorArgs = ['license_issue_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?> </label>
                    <input type="text" name="real_license_expiration_dates[]" id="license_expiration_date"
                        placeholder="<?php echo app('translator')->get('receipts.license_expiration_date'); ?>" class="form-control"
                        value="<?php echo e(old('real_license_expiration_dates.0', $estate->license_expiration_date)); ?>">
                    <?php $__errorArgs = ['license_expiration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.property_price'); ?> </label>
                    <input type="text" name="real_property_prices[]" id="property_price"
                        placeholder="<?php echo app('translator')->get('receipts.property_price'); ?>" class="form-control"
                        value="<?php echo e(old('real_property_prices.0', $estate->property_price)); ?>">
                    <?php $__errorArgs = ['property_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="col-12 form-group">
                    <label><?php echo app('translator')->get('receipts.property_notes'); ?> </label>
                    <input type="text" name="real_property_notess[]" id="property_notes"
                        placeholder="<?php echo app('translator')->get('receipts.property_notes'); ?>" class="form-control"
                        value="<?php echo e(old('real_property_notess.0', $estate->property_notes)); ?>">
                    <?php $__errorArgs = ['property_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="help-block">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <input type="hidden" name="real_stored_id[]" value="<?php echo e($estate->id); ?>">


                <?php echo $__env->make('admin.receipt.editComponents.real_rating', ['estate_rate' => $estate->rating], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="col-12 form-group">

                    <a class="btn btn-light-success font-weight-bold btn-sm estate_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_real_estate'); ?>
                    </a><a class="btn btn-light-danger font-weight-bold remove_real_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
                </div>
            </div>
            <div class="clone_real_estate_last">

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.estate_clone', function() {
                var max_input_3 = 9;
                console.log(x);

                var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.real_estate_types'); ?> </label>
                            <select class="form-control real_estate_typess" name="real_estate_typess[]" id='real_estate_types'>
                                <option disabled selected><?php echo app('translator')->get('receipts.real_estate_types'); ?></option>
                                <?php $__currentLoopData = $real_estate_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($real_estate_type->id); ?>"
                                        <?php echo e(old('real_estate_type') == $real_estate_type->id ? 'selected' : ''); ?>>
                                        <?php echo e($real_estate_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['real_estate_types'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.real_estate_status'); ?> </label>
                            <select class="form-control" name="real_estate_statuss[]" id='real_estate_status'>
                                <option disabled selected><?php echo app('translator')->get('receipts.real_estate_status'); ?></option>
                                <?php $__currentLoopData = $real_estate_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $real_estate_stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($real_estate_stat->id); ?>"
                                        <?php echo e(old('real_estate_stat') == $real_estate_stat->id ? 'selected' : ''); ?>>
                                        <?php echo e($real_estate_stat->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['real_estate_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.planned_num'); ?> </label>
                            <input type="text" name="real_planned_nums[]" id="planned_num" placeholder="<?php echo app('translator')->get('receipts.planned_num'); ?>"
                                class="form-control" value="<?php echo e(old('planned_num')); ?>">
                            <?php $__errorArgs = ['planned_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.piece_num'); ?> </label>
                            <input type="text" name="real_piece_nums[]" id="piece_num" placeholder="<?php echo app('translator')->get('receipts.piece_num'); ?>"
                                class="form-control" value="<?php echo e(old('piece_num')); ?>">
                            <?php $__errorArgs = ['piece_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.city'); ?> </label>
                            <select class="form-control" name="real_city_id[]" id='city'>
                                <option disabled selected><?php echo app('translator')->get('receipts.city'); ?></option>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city->id); ?>" <?php echo e(old('city') == $city->id ? 'selected' : ''); ?>>
                                        <?php echo e($city->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.district'); ?> </label>
                            <input type="text" name="real_districts[]" id="district" placeholder="<?php echo app('translator')->get('receipts.district'); ?>"
                                class="form-control" value="<?php echo e(old('district')); ?>">
                            <?php $__errorArgs = ['district'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <input type="hidden" name="real_stored_id[]" value="">

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.owner_num'); ?> </label>
                            <input type="text" name="real_owner_nums[]" id="owner_num" placeholder="<?php echo app('translator')->get('receipts.owner_num'); ?>"
                                class="form-control" value="<?php echo e(old('owner_num')); ?>">
                            <?php $__errorArgs = ['owner_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.rate_num'); ?> </label>
                            <input type="text" name="real_rate_nums[]" id="rate_num" placeholder="<?php echo app('translator')->get('receipts.rate_num'); ?>"
                                class="form-control" value="<?php echo e(old('rate_num')); ?>">
                            <?php $__errorArgs = ['rate_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_type'); ?> </label>
                            <select class="form-control" name="real_license_type_id[]" id='real_license_type_id'>
                                <option disabled selected><?php echo app('translator')->get('receipts.license_type'); ?></option>
                                <?php $__currentLoopData = $license_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $license_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($license_type->id); ?>" <?php echo e(old('license_type') == $license_type->id ? 'selected' : ''); ?>>
                                        <?php echo e($license_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['real_license_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_issue_date'); ?> </label>
                            <input type="text" name="real_license_issue_dates[]" id="license_issue_date"
                                placeholder="<?php echo app('translator')->get('receipts.license_issue_date'); ?>" class="form-control"
                                value="<?php echo e(old('license_issue_date')); ?>">
                            <?php $__errorArgs = ['license_issue_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?> </label>
                            <input type="text" name="real_license_expiration_dates[]" id="license_expiration_date"
                                placeholder="<?php echo app('translator')->get('receipts.license_expiration_date'); ?>" class="form-control"
                                value="<?php echo e(old('license_expiration_date')); ?>">
                            <?php $__errorArgs = ['license_expiration_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-3 form-group">
                            <label><?php echo app('translator')->get('receipts.property_price'); ?> </label>
                            <input type="text" name="real_property_prices[]" id="property_price"
                                placeholder="<?php echo app('translator')->get('receipts.property_price'); ?>" class="form-control"
                                value="<?php echo e(old('property_price')); ?>">
                            <?php $__errorArgs = ['property_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-12 form-group">
                            <label><?php echo app('translator')->get('receipts.property_notes'); ?> </label>
                            <input type="text" name="real_property_notess[]" id="property_notes"
                                placeholder="<?php echo app('translator')->get('receipts.property_notes'); ?>" class="form-control"
                                value="<?php echo e(old('property_notes')); ?>">
                            <?php $__errorArgs = ['property_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="help-block">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <?php echo $__env->make('admin.receipt.components.real_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="col-3 form-group">
                        <a class="btn btn-light-success font-weight-bold btn-sm estate_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_real_estate'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_real_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                if (x < max_input_3) {
                    $('.clone_real_estate .clone_real_estate_last').append(content);
                    x++;
                }
            });

            $(document).on('click', '.remove_real_input', function() {
                $(this).parent().parent().remove();
                x--;
            });
        });
    </script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;

            $(document).on('click', '.real_rate_clone', function() {
                var parent = $(this).parents(".clone_real_rate");
                var selectVal = $("#real_estate_types").val();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('real_estate_types')); ?>",
                    data: {
                        real_estate_type: selectVal,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        let real_estate_id = response;
                        if (x < MAX_INPUT) {
                            parent.append(renderRate(real_estate_id, x));
                            x++;
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            });

            $(document).on('click', '.remove_real_rate_input', function() {
                $(this).parent().parent().remove();
                x--;
            })


            $(document).on('change', ".real_bank_id", function() {

                let bank_val = $(this).val();
                let emp_rate_id = "#" + $(this).attr("choice_id");
                $(emp_rate_id).empty();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('bank_emp_data')); ?>",
                    data: {
                        bank_val: bank_val,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        let len = response.length;
                        if (len > 0) {
                            for (i = 0; i < len; i++) {
                                let name = response[i].name;
                                let id = response[i].id;
                                let bank_emp_details = '<option value="' + id + '">' +
                                    name + ' </option>'
                                $(emp_rate_id).append(bank_emp_details);
                            }
                        } else {
                            let bank_emp_details = '<option value="0"> لا توجد بيانات </option>'
                            $(emp_rate_id).append(bank_emp_details);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $(document).on('change', ".real_estate_typess", function() {

                let real_estate_type = $(this).val();
                console.log(real_estate_type);
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('real_estate_types')); ?>",
                    data: {
                        real_estate_type: real_estate_type,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        console.log(response);
                        let real_estate_id = response;

                        $('.real_estate_id').each(function(i, obj) {
                            console.log(obj);
                            var value = $(obj).val(real_estate_id);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            function renderRate(id, x) {
                let content = `
            <div class="new-income">
                <div class="row">
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.bank'); ?> </label>
                        <select class="form-control real_bank_id" choice_id="emp_rate_choice_id_${x+1}" name="real_bank_ids[]" id='business_sector_id_${x+1}'>
                            <option disabled selected><?php echo app('translator')->get('receipts.bank'); ?></option>
                            <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($bank->id); ?>" <?php echo e(old('bank') == $bank->id ? 'selected' : ''); ?>>
                                    <?php echo e($bank->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['real_bank_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.first_rate'); ?> </label>
                        <input type="text" name="real_first_rates[]" id="first_rate"
                            placeholder="<?php echo app('translator')->get('receipts.first_rate'); ?>" class="form-control"
                            value="<?php echo e(old('first_rate')); ?>">
                        <?php $__errorArgs = ['first_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.second_rate'); ?> </label>
                        <input type="text" name="real_second_rates[]" id="second_rate"
                            placeholder="<?php echo app('translator')->get('receipts.second_rate'); ?>" class="form-control"
                            value="<?php echo e(old('second_rate')); ?>">
                        <?php $__errorArgs = ['second_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.third_rate'); ?> </label>
                        <input type="text" name="real_third_rates[]" id="third_rate"
                            placeholder="<?php echo app('translator')->get('receipts.third_rate'); ?>" class="form-control"
                            value="<?php echo e(old('third_rate')); ?>">
                        <?php $__errorArgs = ['third_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.emp_rate'); ?> </label>
                        <select class="form-control" name="real_emp_rates[]" id="emp_rate_choice_id_${x+1}">
                            <option disabled selected><?php echo app('translator')->get('receipts.emp_rate'); ?></option>
                        </select>
                        <?php $__errorArgs = ['real_emp_rate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.approved_rate'); ?> </label>
                        <input type="text" name="real_approved_rates[]" id="approved_rate"
                            placeholder="<?php echo app('translator')->get('receipts.approved_rate'); ?>" class="form-control"
                            value="<?php echo e(old('approved_rate')); ?>">
                        <?php $__errorArgs = ['approved_rate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   <input type="hidden" name="real_estate_id[]" value="${id}" class="real_estate_id">
                    <div class="col-6 form-group">
                        <label><?php echo app('translator')->get('receipts.rate_notes'); ?> </label>
                        <input type="text" name="real_rate_notess[]" id="rate_notes"
                            placeholder="<?php echo app('translator')->get('receipts.rate_notes'); ?>" class="form-control"
                            value="<?php echo e(old('rate_notes')); ?>">
                        <?php $__errorArgs = ['rate_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="help-block">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-3 form-group">

                <a class="btn btn-light-success font-weight-bold btn-sm real_rate_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_real_rate'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_real_rate_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                return content;
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/editComponents/real_state.blade.php ENDPATH**/ ?>