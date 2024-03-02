<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showComponents()
    {
        return view('components');
    }

    public function showComponentsElementsAlerts()
    {
        return view('components/elements/alerts');
    }

    public function showComponentsElementsAccordions()
    {
        return view('components/elements/accordions');
    }

    public function showComponentsElementsAvatar()
    {
        return view('components/elements/avatar');
    }

    public function showComponentsElementsBadges()
    {
        return view('components/elements/badges');
    }

    public function showComponentsElementsButtons()
    {
        return view('components/elements/buttons');
    }

    public function showComponentsElementsButtonsGroup()
    {
        return view('components/elements/buttons-group');
    }

    public function showComponentsElementsBreadcrumb()
    {
        return view('components/elements/breadcrumb');
    }

    public function showComponentsElementsCards()
    {
        return view('components/elements/cards');
    }

    public function showComponentsElementsCarousel()
    {
        return view('components/elements/carousel');
    }

    public function showComponentsElementsListDropdown()
    {
        return view('components/elements/list-dropdown');
    }

    public function showComponentsElementsModals()
    {
        return view('components/elements/modals');
    }

    public function showComponentsElementsPagination()
    {
        return view('components/elements/pagination');
    }

    public function showComponentsElementsPopover()
    {
        return view('components/elements/popover');
    }

    public function showComponentsElementsProgress()
    {
        return view('components/elements/progress');
    }

    public function showComponentsElementsSpinner()
    {
        return view('components/elements/spinner');
    }

    public function showComponentsElementsTabs()
    {
        return view('components/elements/tabs');
    }

    public function showComponentsElementsToast()
    {
        return view('components/elements/toast');
    }

    public function showComponentsElementsTooltip()
    {
        return view('components/elements/tooltip');
    }

    public function showComponentsElementsTypography()
    {
        return view('components/elements/typography');
    }

    public function showComponentsElementsUtilBorder()
    {
        return view('components/elements/util-border');
    }

    public function showComponentsElementsUtilColors()
    {
        return view('components/elements/util-colors');
    }

    public function showComponentsElementsUtilDisplay()
    {
        return view('components/elements/util-display');
    }

    public function showComponentsElementsUtilEmbeded()
    {
        return view('components/elements/util-embeded');
    }

    public function showComponentsElementsUtilFlex()
    {
        return view('components/elements/util-flex');
    }

    public function showComponentsElementsUtilText()
    {
        return view('components/elements/util-text');
    }

    public function showComponentsElementsUtilSizing()
    {
        return view('components/elements/util-sizing');
    }

    public function showComponentsElementsUtilSpacing()
    {
        return view('components/elements/util-spacing');
    }

    public function showComponentsElementsUtilOthers()
    {
        return view('components/elements/util-others');
    }

    public function showComponentsMiscSvgIcons()
    {
        return view('components/misc/svg-icons');
    }

    public function showComponentsMiscNioicon()
    {
        return view('components/misc/nioicon');
    }

    public function showComponentsMiscIcons()
    {
        return view('components/misc/icons');
    }

    public function showComponentsTablesTableBasic()
    {
        return view('components/tables/table-basic');
    }

    public function showComponentsTablesTableSpecial()
    {
        return view('components/tables/table-special');
    }

    public function showComponentsTablesTableDatatable()
    {
        return view('components/tables/table-datatable');
    }

    public function showComponentsFormsFormElements()
    {
        return view('components/forms/form-elements');
    }

    public function showComponentsFormsFormUpload()
    {
        return view('components/forms/form-upload');
    }

    public function showComponentsFormsDatetimePicker()
    {
        return view('components/forms/datetime-picker');
    }

    public function showComponentsFormsNumberSpinner()
    {
        return view('components/forms/number-spinner');
    }

    public function showComponentsFormsFormLayouts()
    {
        return view('components/forms/form-layouts');
    }

    public function showComponentsFormsFormValidation()
    {
        return view('components/forms/form-validation');
    }

    public function showComponentsFormsFormWizard()
    {
        return view('components/forms/form-wizard');
    }

    public function showComponentsFormsFormSummernote()
    {
        return view('components/forms/form-summernote');
    }

    public function showComponentsFormsFormQuill()
    {
        return view('components/forms/form-quill');
    }

    public function showComponentsFormsFormTinymce()
    {
        return view('components/forms/form-tinymce');
    }

    public function showComponentsChartsChartjs()
    {
        return view('components/charts/chartjs');
    }

    public function showComponentsChartsKnob()
    {
        return view('components/charts/knob');
    }

    public function showComponentsMiscToastr()
    {
        return view('components/misc/toastr');
    }

    public function showComponentsMiscSweetAlert()
    {
        return view('components/misc/sweet-alert');
    }

    public function showComponentsMiscJsTree()
    {
        return view('components/misc/js-tree');
    }

    public function showComponentsMiscDualListbox()
    {
        return view('components/misc/dual-listbox');
    }
}
