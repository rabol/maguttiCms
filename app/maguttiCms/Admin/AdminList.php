<?php

namespace App\maguttiCms\Admin;

Use Form;
Use App;
use Carbon\Carbon;

/**
 * Class AdminForm
 * @package App\maguttiCms\Admin
 */
class AdminList
{

    /**
     * @var
     */
    protected $html;
    /**
     * @var
     */
    protected $property;


    /**
     * @param $property
     * @return $this
     */
    public function initList($property)
    {
        $this->html = "";
        $this->property = $property;
        return $this;
    }

    /**
     *
     */
    public function getListHeader()
    {

        $html = '';
        $html .= $this->getSelectAbleHeader();
        $nF = 0; //  field number
        foreach ($this->property['field'] as $_code => $_item) {
            $html .= "<th class=\"middle-vertical-align\">\n";
            $html .= $this->getHeaderItemLabel($_item, $_code);
            $html .= $this->getOrderableField($_code);
            $html .= "</th>\n";
            $nF++;
        }
        echo $html;
    }

    /**
     * Gestione etichetta per header delle liste
     * se non presente nelle traduzioni prende
     * il valore del config
     * @param $_item
     * @param $_code
     * @return array|\Illuminate\Contracts\Translation\Translator|string|null
     */
    function getHeaderItemLabel($_item, $_code)
    {
        $label = is_array($_item) ? $_code : $_item;
        $full_label_path = 'admin.label.' . $label;
        return (\Lang::has($full_label_path)) ? trans($full_label_path) : ucwords(str_replace('_', ' ', $label));
    }


    /**
     * @return string
     */
    protected function getSelectAbleHeader()
    {
        return ($this->property['selectable']) ? "<th class=\"selectable-column\"></th>\n" : '';
    }

    /**
     * @param $i
     * @return string
     */
    protected function getOrderableField($i)
    {
        $html = '';
        if (array_key_exists($i, $this->property['field'])) {
            $item = $this->property['field'][$i];
            if ($this->fieldIsOrderable($item)) {
                $curField = (is_array($item)) ? data_get($item, 'order_field', $item['field']) : $item;
                $html .= " <a href=\"?orderBy=$curField&orderType=desc\"><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i></a>\n";
                $html .= " <a href=\"?orderBy=$curField&orderType=asc\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>\n";
            }
        }
        return $html;
    }

    /**
     * @param $item
     * @return bool
     */
    protected function fieldIsOrderable($item)
    {
        return  $item['orderable'] ?? false;
    }
}
