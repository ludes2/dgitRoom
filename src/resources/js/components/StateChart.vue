<script>
import { Bar} from 'vue-chartjs'

export default {
  extends: Bar,
  props: {
    chartData: {
      type: Array,
      default: null
    },
    chartLabels: {
        type: Array,
        default: null
    }
  },
  data () {
      return {
        options: {
          scales: {
            yAxes: [{
              gridLines: {
                display: true
              },
              ticks: {
                fontColor: "#FFFFFF80",
              }
            }],
            xAxes: [ {
              gridLines: {
                display: false
              },
              ticks: {
                fontColor: "#FFFFFF80",
              }
            }]
          },
          legend: {
            display: false
          },
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: true,
            fontSize: 16,
            fontColor: "#FFFFFF80",
            text: "Door movements"
          }
        }
      }
    },
  mounted () {
      this.gradient = this.$refs.canvas.getContext('2d').createLinearGradient(0, 0, 0, 450);
    this.gradient.addColorStop(0, 'rgba(54, 162, 235, 0.9)')
    this.gradient.addColorStop(0.5, 'rgba(54, 162, 235, 0.3)');
    this.gradient.addColorStop(1, 'rgba(54, 162, 235, 0)');
    this.renderStatChart();
  }, 
  methods: {
    renderStatChart(){
      this.renderChart({
        labels: this.chartLabels,
        datasets: [
            {
                label: 'State',
                data: this.chartData,
                borderColor: 'rgba(54, 162, 235, 0.8)',
                //backgroundColor: 'rgba(54, 162, 235, 0.2)',
                backgroundColor: this.gradient,
                borderWidth: 2
            }
        ]
    }, this.options)
    }
  },
  watch: {
		chartLabels() {
			this.renderStatChart();
		}
	}
}
</script>