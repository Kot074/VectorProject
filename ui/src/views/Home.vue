<template>
  <div class="about">
    <div id = "header"></div>
    <div id = "content"></div>
    <div id = "jFooter" class = "jFooter">
      <table>
        <tr>
          <td>Timetable: {{aboutFooter.timetable}}</td>
          <td>Phone: {{aboutFooter.phone}}</td>
          <td>Mail: {{aboutFooter.mail}}</td>
        </tr>
      </table>
    </div>
  </div>
</template>

<script>
export default{
  data: function () {
    return {
      aboutFooter: {
        timetable: 'Понедельник – пятница с 9.00 до 18.00',
        phone: '8-8634-61-53-92 (Начальник научно-методического управления)',
        mail: 'vektornauki@tagcnm.ru'
      }
    }
  },
  methods: {
    showData () {
      alert(this.username)
    }
  }
}
</script>

<style>
  #header {
  }

  #content {
  }

  #jFooter {
    position: absolute;
    left: 0;
    top: 95%;
    bottom: 0%;
    width: 100%;
    background-color:darkkhaki
  }
</style>
