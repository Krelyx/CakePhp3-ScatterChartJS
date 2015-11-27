<?php
/**
 * ScatterChartjsHelper file
 *
 * Licensed under the MIT License
 * Copyright (c) 2015 Xylerk Krelyx
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @author https://github.com/krelyx
 * @link https://github.com/krelyx/cakephp-scatter-chartjs-helper
 * @license http://opensource.org/licenses/MIT
 */
namespace ScatterChartJs\View\Helper;

use Cake\View\Helper;

class ScatterChartjsHelper extends Helper
{
    /**
    * Default configuration.
    *
    * @var array
    **/
    protected $_defaultConfig = [
        'Chart' => [
            'id' => 'myScatterChart',
        ],
        'Canvas' => [
            'class' => 'myScatterChartJs',
            'width' => 600,
            'height' => 400,
            'zindex' => 10,
            'position' => 'relative',
            'css' => null,
            'wrapper' => true,
            'wrapperClass' => 'chartCanvasWrapper',
        ],
        'Options' => [
            // Boolean - Whether to animate the chart
            'animation' => true,

            // Number - Number of animation steps
            'animationSteps' => 60,

            // String - Animation easing effect
            'animationEasing' => "easeOutQuart",

            // Boolean - If we should show the scale at all
            'showScale' => true,

            // Boolean - If we want to override with a hard coded scale
            'scaleOverride' => false,

            // ** Required if scaleOverride is true **
            // Number - The number of steps in a hard coded scale
            'scaleSteps' => null,

            // Number - The value jump in the hard coded scale
            'scaleStepWidth' => null,

            // Number - The scale starting value
            'scaleStartValue' => null,

            // String - Colour of the scale line
            'scaleLineColor' => "rgba(0,0,0,.1)",

            // Number - Pixel width of the scale line
            'scaleLineWidth' => 1,

            // Boolean - Whether to show labels on the scale
            'scaleShowLabels' => true,

            // Interpolated JS string - can access value
            'scaleLabel' => "<%=value%>",

            // Boolean - Whether the scale should stick to integers, not floats even if drawing space is there
            'scaleIntegersOnly' => true,

            // Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            'scaleBeginAtZero' => false,

            // String - Scale label font declaration for the scale label
            'scaleFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Scale label font size in pixels
            'scaleFontSize' => 12,

            // String - Scale label font weight style
            'scaleFontStyle' => "normal",

            // String - Scale label font colour
            'scaleFontColor' => "#666",

            // Boolean - whether or not the chart should be responsive and resize when the browser does. (only with canvas absolute)
            'responsive' => false,

            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            'maintainAspectRatio' => false,

            // Boolean - Determines whether to draw tooltips on the canvas or not
            'showTooltips' => true,

            // Function - Determines whether to execute the customTooltips function instead of drawing the built in tooltips (See [Advanced - External Tooltips](#advanced-usage-custom-tooltips))
            'customTooltips' => false,

            // Array - Array of string names to attach tooltip events
            'tooltipEvents' => ["mousemove", "touchstart", "touchmove"],

            // String - Tooltip background colour
            'tooltipFillColor' => "rgba(0,0,0,0.8)",

            // String - Tooltip label font declaration for the scale label
            'tooltipFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Tooltip label font size in pixels
            'tooltipFontSize' => 14,

            // String - Tooltip font weight style
            'tooltipFontStyle' => "normal",

            // String - Tooltip label font colour
            'tooltipFontColor' => "#fff",

            // String - Tooltip title font declaration for the scale label
            'tooltipTitleFontFamily' => '"Helvetica Neue", "Helvetica", "Arial", "sans-serif"',

            // Number - Tooltip title font size in pixels
            'tooltipTitleFontSize' => 14,

            // String - Tooltip title font weight style
            'tooltipTitleFontStyle' => "bold",

            // String - Tooltip title font colour
            'tooltipTitleFontColor' => "#fff",

            // Number - pixel width of padding around tooltip text
            'tooltipYPadding' => 6,

            // Number - pixel width of padding around tooltip text
            'tooltipXPadding' => 6,

            // Number - Size of the caret on the tooltip
            'tooltipCaretSize' => 8,

            // Number - Pixel radius of the tooltip border
            'tooltipCornerRadius' => 6,

            // Number - Pixel offset from point x to tooltip edge
            'tooltipXOffset' => 10,

            // String - Template string for single tooltips
            'tooltipTemplate' => "<%if (datasetLabel){%><%=datasetLabel%>: <%}%><%=argLabel%>; <%=valueLabel%>",

            // String - Template string for multiple tooltips
            'multiTooltipTemplate' => "<%=argLabel%>; <%=valueLabel%>",

            // Function - Will fire on animation progression.
            'onAnimationProgress' => 'function(){}',

            // Function - Will fire on animation completion.
            'onAnimationComplete' => 'function(){}',
            
            // Interpolated JS string - can access value
            'scaleArgLabel' => "<%=value%>",				
            
            // Interpolated JS string - can access value
            'scaleSizeLabel' => "<%=value%>",				

            // String - Message for empty data
            'emptyDataMessage' => "chart has no data",		

        // SCALE
            //Boolean - Whether grid lines are shown across the chart
            'scaleShowGridLines' => true,				
		
            //Number - Width of the grid lines
            'scaleGridLineWidth' => 1,			
            
            //String - Colour of the grid lines
            'scaleGridLineColor' => "rgba(0,0,0,.05)",	
            
            //Boolean - Whether to show horizontal lines (except X axis)
            'scaleShowHorizontalLines' => true,		
            
            //Boolean - Whether to show vertical lines (except Y axis)	
            'scaleShowVerticalLines' => true,			

	// DATE SCALE
            'scaleType' => "number",
            'useUtc' =>  true,
            'scaleDateFormat' => "mmm d",
            'scaleTimeFormat' => "h:MM",
            'scaleDateTimeFormat' => "mmm d, yyyy, hh:MM",
            
	// LINES
            // Boolean - Whether to show a stroke for datasets
            'datasetStroke' => true,	
            
            // Number - Pixel width of dataset stroke
            'datasetStrokeWidth' => 2,	
            
            // String - Color of dataset stroke
            'datasetStrokeColor' => '#007ACC',	
            
            // String - Color of dataset stroke
            'datasetPointStrokeColor' => 'white',	

            // Boolean - Whether the line is curved between points
            'bezierCurve' => true,	
            
            // Number - Tension of the bezier curve between points
            'bezierCurveTension' => 0.4,		

	// POINTS
            // Boolean - Whether to show a dot for each point
            'pointDot' => true,		
            
            // Number - Pixel width of point dot stroke
            'pointDotStrokeWidth' => 1,	
            
            // Number - Radius of each point dot in pixels
            'pointDotRadius' => 4,				
            
            // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            'pointHitDetectionRadius' => 4,		
           
            'legendTemplate' => "<ul class=\"<%=name.toLowerCase()%>-legend\"><%for(var i=0;i<datasets.length;i++){%><li><span class=\"<%=name.toLowerCase()%>-legend-marker\" style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",

        ],
    ]; 
    public $helpers = ['Html'];

    public function __construct(\Cake\View\View $View, $config = [])
    {
        parent::__construct($View, $config);
    }

    public function beforeRender($viewFile) {
        echo $this->Html->script("ScatterChartJs.ScatterChartJs/Chart.Core", ['block' => true, 'once' => true]);
        echo $this->Html->script("ScatterChartJs.ScatterChartJs/Chart.Scatter", ['block' => true, 'once' => true]);
    }

    public function createChart($data = [], $options = []) { 
            
        // ERRORS EXCEPTIONS
        // Error if no data from view
        if(empty($data)) {
            echo $this->Html->scriptBlock('alert("You need to add some data to createChart() call to method");');
            return;
        }
        // Error if no Data for Chart
        if(!isset($data['Data']) || empty($data['Data'])) {
            echo $this->Html->scriptBlock('alert("You need to add some data[\'Data\'] to createChart() call to method");');
            return;
        }

        $data['Chart']['id'] = isset($data['Chart']['id']) ? $data['Chart']['id'] : $this->config('Chart.id');

        // Creating Chart element
        $chartScript = 'var ctx = document.getElementById("'. $data['Chart']['id'] .'").getContext("2d");';
        
        // Chart Data
        $chartScript .= 'var data = [';

        foreach ($data['Data'] as $key => $value) {
            $json = json_encode($data['Data'][$key]['dataoptions']);
            $json = trim($json, '{}');
            $chartScript .= '{data : ['. implode(',',$data['Data'][$key]['data']). ' ],'. $json. '},';
        }
        $chartScript = rtrim($chartScript,',');
        $chartScript .= '];';
        
        // Prepare Chart Options 
        $options = $this->setOptions($options, $data);
        $chartScript .= 'var options = '. $options .';';
        // Initialize chart object
        $chartScript .= 'var '. $data['Chart']['id'] .' = new Chart(ctx).Scatter(data, options);';

        // Canvas Settings
        $canvasId = (isset($data["Chart"]["id"])) ? $data["Chart"]["id"] : $this->config("Chart.id");
        $canvasClass = (isset($data["Canvas"]["class"])) ? $data["Canvas"]["class"] : $this->config("Canvas.class");
        $canvasWidth = (isset($data["Canvas"]["width"])) ? $data["Canvas"]["width"] : $this->config("Canvas.width");
        $canvasHeight = (isset($data["Canvas"]["height"])) ? $data["Canvas"]["height"] : $this->config("Canvas.height");
        $canvasZindex = (isset($data["Canvas"]["zindex"])) ? $data["Canvas"]["zindex"] : $this->config("Canvas.zindex");
        $canvasPosition = (isset($data["Canvas"]["position"])) ? $data["Canvas"]["position"] : $this->config("Canvas.position");
        $canvasCss = (isset($data['Canvas']['css'])) ? $data['Canvas']['css'] : $this->config('Canvas.css');
        $canvasWrapper = (isset($data['Canvas']['wrapper'])) ? $data['Canvas']['wrapper'] : $this->config('Canvas.wrapper');
        $canvasWrapperClass = (isset($data['Canvas']['wrapperClass'])) ? $data['Canvas']['wrapperClass'] : $this->config("Canvas.wrapperClass");

        // Adding Canvas
        $canvas = 'var chartCanvas = document.createElement("canvas");';
        $canvas .= 'chartCanvas.id = "'. $canvasId .'";';
        $canvas .= 'chartCanvas.className = "'. $canvasClass .'";';
        $canvas .= 'chartCanvas.width = '. $canvasWidth .';';
        $canvas .= 'chartCanvas.height = '. $canvasHeight .';';
        $canvas .= 'chartCanvas.style.zIndex = '. $canvasZindex .';';
        $canvas .= 'chartCanvas.style.position = "'. $canvasPosition .'";';
        if(is_array($canvasCss)) {
            foreach($canvasCss as $elementStyle => $value) {
                $canvas .= 'chartCanvas.style.'. $elementStyle .' = "'. $value .'";';
            } 
        }

        // Canvas Wrapper
        if($canvasWrapper === true) {
            $canvas .= 'var wrapperCanvasDiv = document.createElement("div");';
            $canvas .= 'wrapperCanvasDiv.style.position = "relative";';
            $canvas .= 'wrapperCanvasDiv.className = "'. $canvasWrapperClass .'";';
            $canvas .= 'document.body.appendChild(wrapperCanvasDiv);';
            $canvas .= 'wrapperCanvasDiv.appendChild(chartCanvas);';
        } else {
            $canvas .= 'document.body.appendChild(chartCanvas);';
        }
       
        // Result in inline javascript
        //echo $this->Html->scriptBlock($canvas . $chartScript);
        echo $this->Html->scriptBlock($chartScript);
    }

    /**
     * Set options method to merge default options with controller options and view options.
     * Specific options are given within an array of type chart => [options]
     *
     * @param $opts array of options given
     * @param $data array of chart data
     * @return json object
     */
    protected function setOptions($opts, $data) 
    {

        // priority for options set from view
        if(isset($data['Options'])) {
            $opts['Options'] = isset($opts['Options']) ? array_merge($opts['Options'], $data['Options']) : $data['Options'];
        }

       foreach($this->config('Options') as $key => $value) {
            if(!in_array($key, ['Line', 'Bar', 'Radar', 'Polar', 'Pie', 'Doughnut', 'Scatter'])) {
                $options[$key] = (isset($opts['Options'][$key])) ? $opts['Options'][$key] : $this->config('Options.'.$key);
            }
        }

    /*    // SPECIFIC OPTIONS
        $chartType = (strtolower($data['Chart']['type'] === 'doughnut')) ? 'Pie' : ucfirst(strtolower($data['Chart']['type']));
    
        foreach($this->config('Options.'.$chartType) as $label => $val) {
            // chart type given without capital letters
            $options[$label] = (isset($opts['Options'][$chartType][$label])) 
                ? $opts['Options'][$chartType][$label] 
                : $this->config('Options.'.$chartType.'.'.$label);
            // chart type given with capital letter first
            $options[$label] = (isset($opts['Options'][ucfirst($chartType)][$label])) 
                ? $opts['Options'][$chartType][$label] 
                : $this->config('Options.'.$chartType.'.'.$label);
        }
     * 
     */
        // SPECIFIC OPTIONS
    
        foreach($this->config('Options') as $label => $val) {
            // chart type given without capital letters
            $options[$label] = (isset($opts['Options'][$label])) 
                ? $opts['Options'][$label] 
                : $this->config('Options.'.$label);
            // chart type given with capital letter first
            $options[$label] = (isset($opts['Options'][$label])) 
                ? $opts['Options'][$label] 
                : $this->config('Options.'.$label);
        }



        // solution for javascript functions encoded as strings with json_encode
        // http://solutoire.com/2008/06/12/sending-javascript-functions-over-json/
        $value_arr = array();
        $replace_keys = array();
        foreach($options as $key => &$value) {
            if(!is_array($value)) {
                // Look for values starting with 'function('
                if(strpos($value, 'function(') === 0) {
                    // Store function string.
                    $value_arr[] = $value;
                    // Replace function string in $foo with a 'unique' special key.
                    $value = '%' . $key . '%';
                    // Later on, we'll look for the value, and replace it.
                    $replace_keys[] = '"' . $value . '"';
                }
            }
        }

        $options = json_encode($options);

        // Replace the special keys with the original string.
        $options = str_replace($replace_keys, $value_arr, $options);
        
        return $options;
    }

}
