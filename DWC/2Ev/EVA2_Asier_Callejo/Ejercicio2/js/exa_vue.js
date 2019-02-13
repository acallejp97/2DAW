new Vue({
  el: "main",
  data: {
    nombre: null,
    prioridad: null,
    responsable: null,
    minimo: 1,

    tareas: [
      {
        titulo: "Validacion mediante jQuery",
        responsable: "Josepa",
        prioridad: 1
      },
      { titulo: "Prepara presentacion", responsable: "Iraitz", prioridad: 3 },
      {
        titulo: "Coordinar el trabajo del equipo",
        responsable: "Josepa",
        prioridad: 1
      },
      { titulo: "Control de cambios", responsable: "Mikel", prioridad: 2 },
      {
        titulo: "Creacion del acta de la reunion",
        responsable: "Mikel",
        prioridad: 2
      }
    ]
  },
  computed: {
    prioridades() {
      return this.tareas.filter(tarea => tarea.prioridad >= this.minimo);
    }
  },
  methods: {
    agregarTarea() {
      this.tareas.unshift({
        titulo: this.nombre,
        prioridad: this.prioridad,
        responsable:this.responsable 
      });
      this.nombre = null;
      this.prioridad = null;
      this.responsable = null;
    }
  }
});
