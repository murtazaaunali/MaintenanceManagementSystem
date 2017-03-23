<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
                <h5>Inquiries</h5>
            </div>
            <div class="widget-content nopadding">
                <ul class="recent-posts">
                    <?php foreach ($inquiries as $inquiry): ?>
                        <li>
                            <?php
                            switch ($inquiry->status) {
                                case "0":
                                    echo '<span class="label label-important">Closed</span>';
                                    break;

                                case "1":
                                    echo '<span class="label label-success">Open</span>';
                                    break;

                                case "2":
                                    echo '<span class="label label-info">In progress</span>';
                                    break;

                                case "3":
                                    echo '<span class="label label-warning">On hold</span>';
                                    break;

                                default :
                                    echo "";
                            }
                            ?>                                
                            <div class="article-post">
                                <div class="fr"><a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>" class="btn btn-default btn-mini">View</a></div>
                                <span class="user-info"> #<?php echo $inquiry->id; ?> By: john Deo / <?php echo $inquiry->date_created; ?> Type: <?php echo $inquiry->type; ?> </span>
                                <p><?php echo substr($inquiry->address, 0, 85); ?>...</p>
                                <p><a href="<?php echo site_url('Inquiries/view/' . $inquiry->id); ?>"><?php echo substr($inquiry->comments, 0, 85); ?>...</a> </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5><?php echo $Inquiry->type; ?> service inquiry from <?php echo $Inquiry->fullname; ?> </h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr class="odd gradeX">
                            <td>ID #</td>
                            <td><?php echo $Inquiry->id; ?></td>
                            <td>Type</td>
                            <td><?php echo $Inquiry->type; ?></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><?php echo $Inquiry->date_created; ?></td>
                            <td>Status</td>
                            <td><?php echo $Inquiry->status; ?></td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Full name</td>
                            <td><?php echo $Inquiry->fullname; ?></td>
                            <td>Email</td>
                            <td><?php echo $Inquiry->email; ?></td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td colspan="3"><?php echo $Inquiry->comments; ?></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Address</td>
                            <td><?php echo $Inquiry->address; ?></td>
                            <td>Contact</td>
                            <td class="center"><?php echo $Inquiry->contact; ?></td>
                        </tr>
                        <?php if ($Inquiry->type == 'Cleaning'): ?>
                            <tr>
                                <td>Bedroom</td>
                                <td><?php echo $Inquiry->bedrooms; ?></td>
                                <td>Bathroom</td>
                                <td><?php echo $Inquiry->bedrooms; ?></td>
                            </tr>
                            <tr>
                                <td>Extras</td>
                                <td colspan="3"></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($Inquiry->type == 'Maintenance'):
                            ?>
                            <tr>
                                <td>HVAC</td>
                                <td colspan="3"><?php if ($Inquiry->hvac == 1): ?><i class="icon-check"></i> <?php else: ?><i class="icon-check-empty"></i><?php endif; ?></td>
                            </tr>
                            <tr>
                                <td>Electrical</td>
                                <td colspan="3"><?php if ($Inquiry->electrical == 1): ?><i class="icon-check"></i> <?php else: ?><i class="icon-check-empty"></i><?php endif; ?></td>
                            </tr>
                            <tr>
                                <td>Plumbing</td>
                                <td colspan="3"><?php if ($Inquiry->plumbing == 1): ?><i class="icon-check"></i> <?php else: ?><i class="icon-check-empty"></i><?php endif; ?></td>
                            </tr>
                            <tr>
                                <td>Carpenter</td>
                                <td colspan="3"><?php if ($Inquiry->carpenter == 1): ?><i class="icon-check"></i> <?php else: ?><i class="icon-check-empty"></i><?php endif; ?></td>
                            </tr>
                            <tr>
                                <td>Mason</td>
                                <td colspan="3"><?php if ($Inquiry->mason == 1): ?><i class="icon-check"></i> <?php else: ?><i class="icon-check-empty"></i><?php endif; ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

