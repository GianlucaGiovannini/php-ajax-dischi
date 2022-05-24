<template>
  <div class="container py-3 text-center">
        <label for="gender_album" class="text-white fs-3">Seleziona la tipologia dell'album</label>
        <div class="pt-2">
            <select 
                name="gender_album" 
                id="gender_album" 
                @change="$emit('changeSelectValue')"
                @input="$emit('input', $event.target.value)"
            >
                <option value="">All</option>
                <option value="rock">Rock</option>
                <option value="pop">Pop</option>
                <option value="jazz">Jazz</option>
                <option value="metal">Metal</option>
            </select>
        </div>
  </div>
</template>

<script>
export default {
    name: "SelectGenderComponent",
    props: {
        selectValue: String
    },
}
</script>

<style lang="scss" scoped>
    select {
        font-size: 1.4rem;
        padding: 0.5rem 3rem;
        border: 4px solid $albumTextColor;
        border-radius: 0.75rem;
    }
</style>