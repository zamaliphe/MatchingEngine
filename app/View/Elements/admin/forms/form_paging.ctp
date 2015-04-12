<tfoot>
    <tr>
        <td colspan="<?php echo $colspan ?>">
            <div class="" style="text-align: center;">
                <ul class="pages">
                    <?php
                    echo $this->Paginator->prev('<span class="icon-arrow-14"></span>', array("tag" => "li",'disabledTag' => "li","escape"=>FALSE,'separator' => FALSE), null, array('class' => 'prev disabled' ,"tag" => "li",'disabledTag' => "a","escape"=>FALSE,'separator' => FALSE));
                    echo $this->Paginator->numbers(array('separator' => '', "tag" => "li","currentTag"=>"a","currentClass"=>"active"));
                    echo $this->Paginator->next('<span class="icon-arrow-17"></span>', array("tag" => "li",'disabledTag' => "li","escape"=>FALSE,'separator' => FALSE), null, array('class' => 'next disabled' ,"tag" => "li",'disabledTag' => "a","escape"=>FALSE,'separator' => FALSE));
                    ?>
                </ul>
            </div>
        </td>
    </tr>
</tfoot>